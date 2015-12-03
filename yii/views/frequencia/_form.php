<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Frequencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="frequencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDMonitoria')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'ch')->textInput() ?>

    <?= $form->field($model, 'atividade')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
