<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonitoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acompanhar Monitorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'numProcs', 
            //[
            //    'attribute'=>'IDAluno', 
            //    'value'=>'aluno.nome'
            //],
            'IDDisc',
            [
                'attribute'=>'IDCurso', 
                'value'=>'curso.nome'
            ],
            [
                'attribute'=>'bolsa', 
                'value' => ('bolsa' == 1 ? 'Sim': 'Não')
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
