<?php

namespace app\controllers;

use Yii;
use app\models\Frequencia;
use app\models\FrequenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * FrequenciaController implements the CRUD actions for Frequencia model.
 */
class FrequenciaController extends Controller
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
                        'matchCallback' => function ($rule, $action) {
                            if (!Yii::$app->user->isGuest)
                            {
                                return Yii::$app->user->identity->perfil == 0; // Só adms podem acessar esse controller
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
     * Lists all Frequencia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $aluno = Aluno::find()->where(['CPF' => Yii::$app->user->identity->login])->one();
        $frequencias = Frequencia::find()->where(['IDAluno' => $aluno->ID])->all();
        $f[];
        foreach ($frequencias as $freq) {
            $evento = new \yii2fullcalendar\models\Event();
            $evento->id = $freq->ID;
            $evento->title = $freq->ch;
            $evento->start = $freq->data // fazer gambiarra para 
            $f[] = $evento;
        }

        return $this->render('index', [
            'frequencias' => $f,
        ]);
    }

    /**
     * Displays a single Frequencia model.
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
     * Creates a new Frequencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Frequencia();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Frequencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Frequencia model.
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
     * Finds the Frequencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Frequencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Frequencia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
