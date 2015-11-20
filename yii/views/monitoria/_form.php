<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CursoSearch;
use app\models\DisciplinaSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numProcs')->textInput(['maxlength' => 15, 'style'=>'width:130px']) ?>

    

    <?= $form->field($model, 'IDCurso')->dropDownList([$arrayDeCurso],['prompt'=>'Selecione um curso', 'style'=>'width:300px']); ?>

    <?= $form->field($model, 'IDDisc')->dropDownList([$arrayDeDisc],['prompt'=>'Selecione a disciplina', 'style'=>'width:500px']); ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
