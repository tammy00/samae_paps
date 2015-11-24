<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\DisciplinaSearch;
use app\models\CursoSearch;
use app\models\ProfessorSearch;

/* @var $this yii\web\View */
/* @var $model app\models\DisciplinaPeriodo */

$this->title = 'Alterar Disciplina: ' . ' ' . $model->disciplina->nomeDisciplina . ' - ' . $model->codTurma;
$this->params['breadcrumbs'][] = ['label' => 'Disciplinas do Período', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->disciplina->nomeDisciplina, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="disciplina-periodo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['model' => $model]) ?>

</div>
