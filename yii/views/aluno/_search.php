<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlunoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'matricula') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'RG') ?>

    <?php // echo $form->field($model, 'CPF') ?>

    <?php // echo $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'telResid') ?>

    <?php // echo $form->field($model, 'telCel') ?>

    <?php // echo $form->field($model, 'telComerc') ?>

    <?php // echo $form->field($model, 'IDCurso') ?>

    <?php // echo $form->field($model, 'IDDisc') ?>

    <?php // echo $form->field($model, 'banco') ?>

    <?php // echo $form->field($model, 'agencia') ?>

    <?php // echo $form->field($model, 'conta') ?>

    <?php // echo $form->field($model, 'monitor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
