<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodoAproveitamento */

$this->title = $model->ID . 'º Período de Aproveitamento';
$this->params['breadcrumbs'][] = ['label' => 'Aproveitamento', 'url' => ['/aproveitamento/index']];
$this->params['breadcrumbs'][] = ['label' => 'Períodos de Aproveitamento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periodo-aproveitamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza de que quer deletar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'dataInicio',
            'dataFim',
            'ano',
            'periodo',
        ],
    ]) ?>

</div>
