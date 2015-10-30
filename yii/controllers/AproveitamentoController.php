<?php

namespace app\controllers;

use Yii;
use app\models\Aproveitamento;
use app\models\AproveitamentoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Aluno;
use yii\filters\AccessControl;
use yii\helpers\Html;
use app\models\CursoSearch;
use yii\helpers\ArrayHelper;

/**
 * AproveitamentoController implements the CRUD actions for Aproveitamento model.
 */
class AproveitamentoController extends Controller
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
     * Lists all Aproveitamento models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AproveitamentoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Aproveitamento model.
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
     * Creates a new Aproveitamento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Aproveitamento();
        $arrayDeCurso = ArrayHelper::map(CursoSearch::find()->all(), 'id', 'nome');

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
            return $this->redirect(['view', 'id' => $model->idAluno]);
        } 
        else 
        {
            return $this->render('create', [
                'model' => $model,
                'arrayDeCurso' => $arrayDeCurso,
            ]);
        }
    }

    /**
     * Updates an existing Aproveitamento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $arrayDeCurso = ArrayHelper::map(CursoSearch::find()->all(), 'id', 'nome');

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
            return $this->redirect(['view', 'id' => $model->idAluno]);
        } 
        else 
        {
            return $this->render('update', [
                'model' => $model,
                'arrayDeCurso' => $arrayDeCurso,
            ]);
        }
    }

    /**
     * Deletes an existing Aproveitamento model.
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
     * Finds the Aproveitamento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Aproveitamento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Aproveitamento::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('A página requisitada não existe.');
        }
    }

}
