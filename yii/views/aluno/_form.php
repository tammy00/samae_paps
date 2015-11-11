<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matricula')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RG')->textInput() ?>

    <?= $form->field($model, 'CPF')->textInput() ?>

    <?= $form->field($model, 'endereco')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telResid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telCel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telComerc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDCurso')->textInput() ?>

    <?= $form->field($model, 'IDDisc')->textInput() ?>

    <?= $form->field($model, 'banco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monitor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
