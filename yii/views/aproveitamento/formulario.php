<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
 // @var $model app\models\LoginForm 

/**
 * Tammy
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\controllers\AproveitamentoController;
use app\models\Aproveitamento;

$this->title = 'Formulário de Aproveitamento de Estudo';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="aproveitamento-formulario">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Preencha o formulário abaixo para solicitar aproveitamento de estudo. </p>
    <p>Observação<sub>1</sub>: todos os campos são obrigatórios.</p>
    <p>Observação<sub>2</sub>: preencha um formulário por disciplina.</p><br>

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">

    <b>Digite um número de processo</b>
        <?= Html::input('text','NumProcesso') ?> </div>
    
    <div class="form-group"> 
        <b>Digite seu nome</b>
        <?= Html::input('text','nomeAluno') ?> </div>
    
    <div class="form-group">
        <b>Digite sua matrícula</b>
        <?= Html::input('text','matriculaAluno') ?> </div>

    <br><?= Html::submitButton('Submeter', ['class' => 'btn btn-primary']) ?>
    

    <?php ActiveForm::end(); ?>

</div>

