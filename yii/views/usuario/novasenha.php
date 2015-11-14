<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

    <h2>Informe seu e-mail</h2>
    <p>Atenção: o e-mail deve ser aquele que fora usado em seu cadastro.</p>
    <div class="form-group">
        <?= Html::input('text','email') ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Enviar requisição', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>