<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\controllers\AproveitamentoController;

/* @var $this yii\web\View */
/* @var $model app\models\Aproveitamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aproveitamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NumProcesso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeAluno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matriculaUFAM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cursoUFAM')->dropDownList([$arrayDeCurso],['prompt'=>'Selecione um curso']); ?>

    <?= $form->field($model, 'formaIngresso')->dropDownList(['prompt'=>'Selecione uma forma de ingresso', '1' => 'Transferência Obrigatória', 
    '2' => 'Transferência Facultativa', '3' => 'Portador de Diploma', '4' => 'Novo Vestibular', '5' => 'Outros']); ?>

    <?= $form->field($model, 'disciplinaIES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codIES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creditoIES')->textInput() ?>

    <?= $form->field($model, 'horaIES')->textInput() ?>

    <?= $form->field($model, 'mediaIES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creditoUFAM')->textInput() ?>

    <?= $form->field($model, 'horaUFAM')->dropDownList(['30' => '30h00min', '45' => '45h00min', '60' => '60h00min', '75' => '75h00min', '90' => '90h00min', '120' => '120h00min']); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Solicitar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
