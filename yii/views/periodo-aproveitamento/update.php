<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodoAproveitamento */

$this->title = 'Atualizar ' . $model->ID . 'º Período';
$this->params['breadcrumbs'][] = ['label' => 'Aproveitamento', 'url' => ['/aproveitamento/index']];
$this->params['breadcrumbs'][] = ['label' => 'Períodos de Aproveitamento', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID . 'º', 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="periodo-aproveitamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>



</div>
