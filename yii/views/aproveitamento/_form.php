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

    <?= $form->field($model, 'numProcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDAluno')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDCurso')->dropDownList([$arrayDeCurso],['prompt'=>'Selecione um curso']); ?>

    <?= $form->field($model, 'formaIngreso')->dropDownList(['prompt'=>'Selecione uma forma de ingresso', '1' => 'Transferência Obrigatória', 
    '2' => 'Transferência Facultativa', '3' => 'Portador de Diploma', '4' => 'Novo Vestibular', '5' => 'Outros']); ?>

    <?= $form->field($model, 'discIES')->textInput() ?>

    <?= $form->field($model, 'codIES')->textInput() ?>

    <?= $form->field($model, 'credIES')->textInput() ?>

    <?= $form->field($model, 'chIES')->textInput() ?>

    <?= $form->field($model, 'mediaIES')->textInput() ?>

    <?= $form->field($model, 'codUFAM')->textInput() ?>

    <?= $form->field($model, 'chUFAM')->textInput() ?>

    <?= $form->field($model, 'credUFAM')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Solicitar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
