<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CursoSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matricula')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'RG')->textInput() ?>

    <?= $form->field($model, 'CPF')->textInput() ?>

    <?= $form->field($model, 'endereco')->textinput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'telResid')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'telCel')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'telComerc')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'IDCurso')->dropDownList([$arrayDeCurso],['prompt'=>'Selecione seu curso']); ?>

    <?= $form->field($model, 'banco')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'agencia')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'conta')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Adicionar Aluno' : 'Atualizar Dados', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
