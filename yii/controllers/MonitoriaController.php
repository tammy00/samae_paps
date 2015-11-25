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
use app\models\CursoSearch;
use yii\filters\AccessControl;

/**
 * MonitoriaController implements the CRUD actions for Monitoria model.
 */
class MonitoriaController extends Controller
{
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
                                if ( Yii::$app->user->identity->perfil === 1 ) 
                                {
                                    return Yii::$app->user->identity->perfil == 1; 
                                }
                                else  return Yii::$app->user->identity->perfil == 0; 
                            }
                            //else -> redirecionar para o site/login
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
        $arrayDeCurso = ArrayHelper::map(CursoSearch::find()->all(), 'ID', 'nome');
        $arrayDeDisc = ArrayHelper::map(DisciplinaSearch::find()->all(), 'ID', 'nomeDisciplina');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'arrayDeCurso' => $arrayDeCurso,
                'arrayDeDisc'  => $arrayDeDisc,
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
        $arrayDeCurso = ArrayHelper::map(CursoSearch::find()->all(), 'ID', 'nome');
        $arrayDeDisc = ArrayHelper::map(DisciplinaSearch::find()->all(), 'ID', 'nomeDisciplina');


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'arrayDeCurso' => $arrayDeCurso,
                'arrayDeDisc'  => $arrayDeDisc,
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

    public function actionFazerplanosemestral()
    {

        return $this->render('fazerplanosemestral');
    }

    public function actionGerarplanosemestraldisciplina()
    {

        return $this->render('gerarplanosemestraldisciplina');
    }

    public function actionGerarquadrogeral()
    {

        return $this->render('gerarquadrogeral');
    }

    public function actionGerarfrequenciageral()
    {

        return $this->render('gerarfrequenciageral');
    }

    public function actionGerarrelatoriosemestral()
    {

        return $this->render('gerarrelatoriosemestral');
    }

    public function actionGerarrelatorioanual()
    {

        return $this->render('gerarrelatorioanual');
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
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
