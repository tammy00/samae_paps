<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Disciplina */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disciplina-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodDisciplina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDCurso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CargaHoraria')->textInput() ?>

    <?= $form->field($model, 'Credito')->textInput() ?>

    <?= $form->field($model, 'Periodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Laboratorio')->textInput() ?>

    <?= $form->field($model, 'QTO')->textInput() ?>

    <?= $form->field($model, 'QAT')->textInput() ?>

    <?= $form->field($model, 'CodTurma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodProfessor')->textInput() ?>

    <?= $form->field($model, 'Monitoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
