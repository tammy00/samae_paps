<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\ProfessorSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */

$this->title = 'Atualização de registro: ' . ' ' . $model->Matricula;
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Matricula, 'url' => ['view', 'id' => $model->Matricula]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arrayDeProfessor' => $arrayDeProfessor,
    ]) ?>

</div>
