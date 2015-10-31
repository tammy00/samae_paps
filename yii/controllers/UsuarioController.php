<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use app\models\UsuarioSearch;
use app\models\UsuarioForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\swiftmailer\Mailer;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */

/**
 * Tammy
 */

class UsuarioController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'index', 'update', 'view', 'delete'],
                'rules' => [
                    [
                        'actions' => ['create', 'index', 'update', 'view', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],            
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ]; 
    /*
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];  */
    }

    /**
     * Lists all Usuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuario model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Usuario();

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->password = md5($model->password);
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } 
        else 
        {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Usuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuario::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('A página requisitada não existe.');
        }
    }

    public function actionNovousuario()
    {
        if ( Yii::$app->request->post()) 
        {
             $model = new Usuario();
             $model->nome = Yii::$app->request->post('nome');
             $model->login = Yii::$app->request->post('login');
             $model->senha = Yii::$app->request->post('senha');
             $model->email = Yii::$app->request->post('email');
             $model->isAdmin = Yii::$app->request->post('isAdmin');
             
             $model->isNewRecord = true;
            return $this->render('create', ['model' => $model]);  
        }
        else
        {
            return $this->render('novousuario');  
        }
    }

        public function actionNovasenha()
    {
        if ( Yii::$app->request->post()) 
        {
            $email = Yii::$app->request->post('email');
            $user = Usuario::find()->where(['email'=>$email])->one();//findByEmail($email);
            if ($user != null)
            {
                /*$domain = 'sandbox081c87f9e07a4f669f46f26af7261c2a.mailgun.org';
                $key = 'key-f0dc85b59a45bcda5373019f605ce034';
                $mailgun = new \MailgunApi( $domain, $key );   */
                //$mensagem->newMessage();
                $mensagem = Yii::$app->mailer->compose();
                $mensagem->setFrom($email, 'Sistema de Apoio à Monitoria e Aproveitamento de Estudos');
                $mensagem->setTo( $user->email, $user->nome);
                $mensagem->setSubject('Senha no Sistema de Apoio à Monitoria e Aproveitamento de Estudos');
                $mensagem->setTextBody('Sua nova senha temporária é: ' . $user->gerarSenhaNova());
                $mensagem->send();
                
                return $this->render('novasenhaenviada');
            }
            else {
                return $this->render('emailnaoexiste');
            }
        }
        else
        {
            return $this->render('novasenha');  
        }
    }

    public function actionVoltar()
    {
        return $this->render('novasenha');
    }
}
