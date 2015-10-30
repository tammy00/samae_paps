<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AproveitamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aproveitamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NumProcesso') ?>

    <?= $form->field($model, 'idAluno') ?>

    <?= $form->field($model, 'nomeAluno') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'matriculaUFAM') ?>

    <?php // echo $form->field($model, 'Endereco') ?>

    <?php // echo $form->field($model, 'cursoUFAM') ?>

    <?php // echo $form->field($model, 'telefoneResidencial') ?>

    <?php // echo $form->field($model, 'telefoneComercial') ?>

    <?php // echo $form->field($model, 'telefoneCelular') ?>

    <?php // echo $form->field($model, 'formaIngresso') ?>

    <?php // echo $form->field($model, 'disciplinaIES') ?>

    <?php // echo $form->field($model, 'codIES') ?>

    <?php // echo $form->field($model, 'creditoIES') ?>

    <?php // echo $form->field($model, 'horaIES') ?>

    <?php // echo $form->field($model, 'mediaIES') ?>

    <?php // echo $form->field($model, 'disciplinaUFAM') ?>

    <?php // echo $form->field($model, 'codUFAM') ?>

    <?php // echo $form->field($model, 'creditoUFAM') ?>

    <?php // echo $form->field($model, 'horaUFAM') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
