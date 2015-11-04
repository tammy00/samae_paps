<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\ProfessorSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */

$this->title = 'Cadastro em Monitoria';
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arrayDeProfessor' => $arrayDeProfessor,
    ]) ?>

</div>
