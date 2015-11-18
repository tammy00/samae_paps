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

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'numProcs') ?>

    <?= $form->field($model, 'IDAluno') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'IDCurso') ?>

    <?php // echo $form->field($model, 'formaIngreso') ?>

    <?php // echo $form->field($model, 'discIES') ?>

    <?php // echo $form->field($model, 'codIES') ?>

    <?php // echo $form->field($model, 'credIES') ?>

    <?php // echo $form->field($model, 'chIES') ?>

    <?php // echo $form->field($model, 'mediaIES') ?>

    <?php // echo $form->field($model, 'codUFAM') ?>

    <?php // echo $form->field($model, 'chUFAM') ?>

    <?php // echo $form->field($model, 'credUFAM') ?>

    <div class="form-group">
        <?= Html::submitButton('Procurar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Resetar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
