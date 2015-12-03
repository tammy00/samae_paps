<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FrequenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Frequencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frequencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Frequência', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

  <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
      'frequencias'=> $frequencias,
  )); ?>
</div>
