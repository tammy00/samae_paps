<?php

namespace app\controllers;

use Yii;
use app\models\Aluno;
use app\models\AlunoSearch;
use app\models\CursoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
/**
 * AlunoController implements the CRUD actions for Aluno model.
 */
class AlunoController extends Controller
{
    public $flag = 0;

    public function behaviors()
    {
        return [
            'acess' => [
                'class' => AccessControl::className(),
                'only' => ['create','index','update', 'view', 'delete'],
                'rules' => [
                    [
                        'actions' => ['create','index','update', 'view', 'delete'],
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) 
                        {
                            if (!Yii::$app->user->isGuest)
                            {
                                if ( Yii::$app->user->identity->perfil === 1 ) {
                                    return Yii::$app->user->identity->perfil == 1; 
                                }
                                else  return Yii::$app->user->identity->perfil == 0; 
                            }
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Aluno models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlunoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Aluno model.
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
     * Creates a new Aluno model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Aluno();
        $arrayDeCurso = ArrayHelper::map(CursoSearch::find()->all(), 'ID', 'nome');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'arrayDeCurso' => $arrayDeCurso,
            ]);
        }
    }

    /**
     * Updates an existing Aluno model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $arrayDeCurso = ArrayHelper::map(CursoSearch::find()->all(), 'ID', 'nome');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'arrayDeCurso' => $arrayDeCurso,
            ]);
        }
    }

    /**
     * Deletes an existing Aluno model.
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
     * Finds the Aluno model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Aluno the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Aluno::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionEditardados()
    {
        //verifica se o aluno já está cadastrado com o cpf informado...
        
        if (!Yii::$app->request->post()) // Aluno já tem cadastro prévio no sistema - ele só quer editar os dados dele.
        {       
            return $this->render('editardados');
        }
        else
        {
            $cpf = Yii::$app->request->post('cpf');
            $aluno = Aluno::find()->where(['cpf' => $cpf])->one();
            if ($aluno != null) 
            {
                $arrayDeCurso = ArrayHelper::map(CursoSearch::find()->all(), 'ID', 'nome');
                $dados_aluno = Aluno::findOne(['CPF' => $cpf]);

               return $this->redirect(['view', 'id' => $dados_aluno->ID]);
            } 
            else // Aluno com o cpf informado não está cadastrado no sistema.
            {
                return $this->render('editardados', ['erro' => 'Você não tem cadastro prévio no sistema. Entre em contato com a secretaria para resolver o problema.']);
            }  
        }
    }

    public function afterFind()
    {
        $this->IDDisc = $this->nome;
    }
}
