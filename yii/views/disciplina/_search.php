<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DisciplinaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disciplina-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'IDCurso') ?>

    <?= $form->field($model, 'IDProf') ?>

    <?php // echo $form->field($model, 'ch') ?>

    <?php // echo $form->field($model, 'credito') ?>

    <?php // echo $form->field($model, 'periodo') ?>

    <?php // echo $form->field($model, 'qat') ?>

    <?php // echo $form->field($model, 'qto') ?>

    <?php // echo $form->field($model, 'codTurma') ?>

    <?php // echo $form->field($model, 'lab') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
