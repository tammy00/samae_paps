<?php

namespace app\controllers;

use Yii;
use app\models\Monitoria;
use app\models\MonitoriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Disciplina;
use app\models\DisciplinaSearch;
use yii\helpers\ArrayHelper;
use yii\db\Command;
use app\models\ProfessorSearch;

/**
 * MonitoriaController implements the CRUD actions for Monitoria model.
 */
class MonitoriaController extends Controller
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
     * Lists all Monitoria models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MonitoriaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Monitoria model.
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
     * Creates a new Monitoria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Monitoria();
        $arrayDeProfessor = ArrayHelper::map(ProfessorSearch::find()->all(), 'IDProfessor', 'Nome');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDProfessor]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'arrayDeProfessor' => $arrayDeProfessor,
            ]);
        }
    }

    /**
     * Updates an existing Monitoria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $arrayDeProfessor = ArrayHelper::map(ProfessorSearch::find()->all(), 'id', 'nome');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDProfessor]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'arrayDeProfessor' => $arrayDeProfessor,
            ]);
        }
    }

    /**
     * Deletes an existing Monitoria model.
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
     * Finds the Monitoria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Monitoria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Monitoria::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('A página requisitada não existe.');
        }
    }

    public function actionSelecionardisciplinas ()
    {
        $model = new Monitoria();
        $arrayDeDisciplina = ArrayHelper::map(DisciplinaSearch::find()->all(), 'ID', 'Nome');

        if ($model->load(Yii::$app->request->post() ) )
        {
            $disc = new Disciplina();
            $selecoes = [];

            foreach ($arrayDeDisciplina as $disc->Monitoria)
            {
                $selecoes[] = ['' => $disc->Monitoria];
            }
            Yii::$app->db->createCommand()->batchInsert(Disciplina::tableName(), 
                [''], 
                $selecoes
            )->execute();
            return $this->render('deucerto'); // Seria legal colocar uma comparação aqui para definir se renderiza ou não a página "deucerto"...
        }
        else 
        {
            return $this->render('selecionardisciplinas', [
                'model'=>$model,
                'arrayDeDisciplina'=>$arrayDeDisciplina,
                ]);
        }  
    }
}
