<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\controllers\MonitoriaController;
use yii\widgets\ActiveField;

/* @var $this yii\web\View */
/* @var $model app\models\Aproveitamento */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Selecionar Disciplinas';
$this->params['breadcrumbs'][] = ['label' => 'Monitoria', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="monitoria-selectform">

    <?php $form = ActiveForm::begin(); ?>

     <?=  $form->field($model, 'Bolsista')->checkboxList($arrayDeDisciplina);  ?> 

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>