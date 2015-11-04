<?php

namespace app\controllers;

use Yii;
use app\models\Professor;
use app\models\ProfessorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProfessorController implements the CRUD actions for Professor model.
 */
class ProfessorController extends Controller
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
     * Lists all Professor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProfessorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Professor model.
     * @param string $IDProfessor
     * @param string $IDDisciplina
     * @return mixed
     */
    public function actionView($IDProfessor, $IDDisciplina)
    {
        return $this->render('view', [
            'model' => $this->findModel($IDProfessor, $IDDisciplina),
        ]);
    }

    /**
     * Creates a new Professor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Professor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDProfessor' => $model->IDProfessor, 'IDDisciplina' => $model->IDDisciplina]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Professor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $IDProfessor
     * @param string $IDDisciplina
     * @return mixed
     */
    public function actionUpdate($IDProfessor, $IDDisciplina)
    {
        $model = $this->findModel($IDProfessor, $IDDisciplina);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDProfessor' => $model->IDProfessor, 'IDDisciplina' => $model->IDDisciplina]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Professor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $IDProfessor
     * @param string $IDDisciplina
     * @return mixed
     */
    public function actionDelete($IDProfessor, $IDDisciplina)
    {
        $this->findModel($IDProfessor, $IDDisciplina)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Professor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $IDProfessor
     * @param string $IDDisciplina
     * @return Professor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IDProfessor, $IDDisciplina)
    {
        if (($model = Professor::findOne(['IDProfessor' => $IDProfessor, 'IDDisciplina' => $IDDisciplina])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
