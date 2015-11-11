<?php

use yii\helpers\Html;
use app\models\CursoSearch;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Aproveitamento */

$this->title = 'Atualização de Solicitação de Aproveitamento: ' . ' ' . $model->numProcs;
$this->params['breadcrumbs'][] = ['label' => 'Aproveitamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numProcs, 'url' => ['view', 'id' => $model->numProcs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aproveitamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
