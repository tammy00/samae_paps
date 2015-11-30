<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CursoSearch;
use app\models\DisciplinaSearch;
use app\models\Curso;
use app\models\Disciplina;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="monitoria-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
        <?= $form->field($model, 'numProcs')->textInput(['maxlength' => 15, 'style'=>'width:130px', 'readonly' => true]) ?>

        <?= $form->field($model, 'IDCurso')->dropDownList(ArrayHelper::map(Curso::find()->orderBy('nome')->asArray()->all(), 'ID', 'nome'), 
        	['prompt'=>'Selecione um curso', 'style'=>'width:300px']); ?>

        <?= $form->field($model, 'IDDisc')->dropDownList(ArrayHelper::map(Disciplina::find()->orderBy('nomeDisciplina')->asArray()->all(), 'id', 'nomeDisciplina'), 
        	['prompt'=>'Selecione a disciplina', 'style'=>'width:600px']); ?>

        <?= $form->field($model, 'bolsa')->checkbox() ?>

        <?= $form->field($model, 'file')->fileInput() ?>

        <?php if(Yii::$app->user->identity->perfil == 0) { ?>
            <?= $form->field($model, 'IDAluno')->textInput(['style'=>'width:200px', 'readonly' => true]) ?>

            <?= $form->field($model, 'status')->dropDownList(['0' => 'Enviado/em avaliação', '1' => 'Deferido', '2' => 'Indeferido', 'style'=>'width:600px']); ?>

            <?= $form->field($model, 'bolsa')->checkbox() ?>

        <?php } ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

        <?php ActiveForm::end(); ?>

</div>
