<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Disciplina */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disciplina-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDCurso')->textInput() ?>

    <?= $form->field($model, 'IDProf')->textInput() ?>

    <?= $form->field($model, 'ch')->textInput() ?>

    <?= $form->field($model, 'credito')->textInput() ?>

    <?= $form->field($model, 'periodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qat')->textInput() ?>

    <?= $form->field($model, 'qto')->textInput() ?>

    <?= $form->field($model, 'codTurma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
