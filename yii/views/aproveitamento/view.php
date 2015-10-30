<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aproveitamento */

$this->title = $model->NumProcesso;
$this->params['breadcrumbs'][] = ['label' => 'Aproveitamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aproveitamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'NumProcesso',
            //'idAluno',
            'nomeAluno',
            //'status',
            'matriculaUFAM',
            'cursoUFAM',
            'formaIngresso',
            'disciplinaIES',
            'codIES',
            'creditoIES',
            'horaIES',
            'mediaIES',
            'creditoUFAM',
            'horaUFAM',
        ],
    ]) ?>

</div>
