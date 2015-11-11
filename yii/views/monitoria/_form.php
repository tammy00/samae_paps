<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numProcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDAluno')->textInput() ?>

    <?= $form->field($model, 'IDDisc')->textInput() ?>

    <?= $form->field($model, 'IDCurso')->textInput() ?>

    <?= $form->field($model, 'bolsa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
