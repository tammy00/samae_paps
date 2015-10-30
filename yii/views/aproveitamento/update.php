<?php

use yii\helpers\Html;
use app\models\CursoSearch;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Aproveitamento */

$this->title = 'Update Aproveitamento: ' . ' ' . $model->nomeAluno;
$this->params['breadcrumbs'][] = ['label' => 'Aproveitamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAluno, 'url' => ['view', 'id' => $model->idAluno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aproveitamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arrayDeCurso' => $arrayDeCurso,
    ]) ?>

</div>
