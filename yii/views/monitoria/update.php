<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */

$this->title = 'Update Monitoria: ' . ' ' . $model->IDProfessor;
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDProfessor, 'url' => ['view', 'id' => $model->IDProfessor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
