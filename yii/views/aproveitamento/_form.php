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

    <?= $form->field($model, 'numProcs')->textInput(['maxlength' => true, 'style'=>'width:120px']) ?>

    <?= $form->field($model, 'IDAluno')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'status')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'IDCurso')->dropDownList([$arrayDeCurso],['prompt'=>'Selecione um curso', 'style'=>'width:300px']); ?>

    <?= $form->field($model, 'formaIngreso')->dropDownList(['prompt'=>'Selecione uma forma de ingresso', '1' => 'Transferência Obrigatória', 
    '2' => 'Transferência Facultativa', '3' => 'Portador de Diploma', '4' => 'Novo Vestibular', '5' => 'Outros'],['style'=>'width:270px']); ?>

    <?= $form->field($model, 'discIES')->textInput(['style'=>'width:500px']) ?>

    <?= $form->field($model, 'codIES')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'credIES')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'chIES')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'mediaIES')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'codUFAM')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'chUFAM')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'credUFAM')->textInput(['style'=>'width:100px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Solicitar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
