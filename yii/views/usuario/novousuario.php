<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

    <h3>Informe seu nome:</h3>
    <div class="form-group">
        <?= Html::input('text','nome') ?>
    </div>

    <h3>Informe seu username:</h3>
    <div class="form-group">
        <?= Html::input('text','login') ?>
    </div>
    
    <h3>Informe sua senha:</h3>
    <div class="form-group">
        <?= Html::input('password','senha') ?>
    </div>

    <h3>Informe seu e-mail:</h3>
    <div class="form-group">
        <?= Html::input('text','email') ?>
    </div>

     <h3>Digite 1, caso seja admin. Zero se não for.</h3>
    <div class="form-group">
        <?= Html::input('text','isAdmin') ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>