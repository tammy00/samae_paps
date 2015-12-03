<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Frequencia */

$this->title = 'Atualizar Frequência: ' . ' ' . $model->data;
$this->params['breadcrumbs'][] = ['label' => 'Frequencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->data, 'url' => ['view', 'id' => $model->data]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="frequencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
