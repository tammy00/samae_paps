<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DisciplinaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disciplina-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'CodDisciplina') ?>

    <?= $form->field($model, 'Nome') ?>

    <?= $form->field($model, 'IDCurso') ?>

    <?= $form->field($model, 'CargaHoraria') ?>

    <?php // echo $form->field($model, 'Credito') ?>

    <?php // echo $form->field($model, 'Periodo') ?>

    <?php // echo $form->field($model, 'Laboratorio') ?>

    <?php // echo $form->field($model, 'QTO') ?>

    <?php // echo $form->field($model, 'QAT') ?>

    <?php // echo $form->field($model, 'CodTurma') ?>

    <?php // echo $form->field($model, 'CodProfessor') ?>

    <?php // echo $form->field($model, 'Monitoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
