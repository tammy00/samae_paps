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

/**
 * AlunoController implements the CRUD actions for Aluno model.
 */
class AlunoController extends Controller
{
    public function behaviors()
    {
        return [
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
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
        if ( Yii::$app->request->post()) 
        {
            
            $model = new Aluno();
            //verifica se o aluno já está cadastrado
            //com o cpf informado...
            //$aluno = Usuario::find()->where(['cpf' => Yii::$app->request->post('cpf') ])->one();

            /* * pega os dados do webservice do cpd * */
            $link = 'http://200.129.163.9:8080/ecampus/servicos/getPessoaValidaSIE?cpf=' ;
            
            $link = $link . Yii::$app->request->post('cpf');
            $webservice = @file_get_contents($link);
            
            // Caso o webservice esteja indisponivel o sistema volta para a pagina inicial

            if($webservice == null)
            {
                return $this->goBack();
            }
            
            $dados = json_decode($webservice, true);

            //verifica se encontrou o CPF no ecampus

            if( isset( $dados['CPF inválido ']) )
            {
                return $this->render('editardados', ['erro'=>'Este CPF não consta no banco de dados do CPD.']);
            }

            //Para alunos com mais de uma matricula

            $ultimo = count($dados) -1 ;

            $model->nome = $dados[$ultimo]['NOME_PESSOA'] ;
            $model->cpf = Yii::$app->request->post('cpf');
            $model->email = $dados[$ultimo]['EMAIL'];
            $model->matricula = $dados[$ultimo]['MATR_ALUNO'];
            
            if($model->matricula != null)
            {
                $model->perfil = Yii::$app->request->post('perfil');  
            }
            
            $model->isNewRecord = true; 
            return $this->render('update', ['model' => $model]);                
        }
        else
        {
            return $this->render('editardados') ;  
        }
    }
}
