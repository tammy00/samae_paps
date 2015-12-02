<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\DisciplinaSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */
/* @var string $periodo */
/* @var string $matricula */
/* @var string $banco */
/* @var string $agencia */
/* @var string $conta */

$this->title = 'Atualização de registro: ' . ' ' . $model->numProcs;
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numProcs, 'url' => ['view', 'id' => $model->numProcs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'periodo' => $periodo,
        'matricula' => $matricula,
        'banco' => $banco,
        'agencia' => $agencia,
        'conta' => $conta,
    ]) ?>

</div>
