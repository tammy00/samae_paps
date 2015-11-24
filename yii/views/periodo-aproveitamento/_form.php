<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodoAproveitamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periodo-aproveitamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dataInicio')->widget(\yii\jui\DatePicker::classname(), [
    	'language' => 'pt-BR',
    	'dateFormat' => 'dd-MM-y',
	]) ?>

    <?= $form->field($model, 'dataFim')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'pt-BR',
        'dateFormat' => 'dd-MM-y',
    ]) ?>

    <?= $form->field($model, 'periodo')->textInput(['style'=>'width:100px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
