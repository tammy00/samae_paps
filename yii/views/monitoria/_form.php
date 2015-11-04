<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numProcesso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodDisciplina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Matricula')->textInput() ?>

    <?= $form->field($model, 'IDProfessor')->dropDownList([$arrayDeProfessor],['prompt'=>'Selecione um professor']); ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
