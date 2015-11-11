<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aproveitamento */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Aproveitamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aproveitamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza de que quer excluir esta solicitação?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'numProcs',
            'IDAluno',
            'status',
            'IDCurso',
            'formaIngreso',
            'discIES',
            'codIES',
            'credIES',
            'chIES',
            'mediaIES',
            'codUFAM',
            'chUFAM',
            'credUFAM',
        ],
    ]) ?>

</div>
