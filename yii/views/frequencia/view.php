<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Frequencia */

$this->title = $model->data;
$this->params['breadcrumbs'][] = ['label' => 'Frequencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frequencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->data], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->data], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza de que quer apagar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'IDMonitoria',
            'data',
            'ch',
            'atividade',
        ],
    ]) ?>

</div>
