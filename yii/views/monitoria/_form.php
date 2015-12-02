<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use app\models\Disciplina;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */
/* @var $form yii\widgets\ActiveForm */
/* @var string $periodo */
/* @var string $matricula */
/* @var string $banco */
/* @var string $agencia */
/* @var string $conta */
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        [
            'label' => 'Aluno',
            'value' => Yii::$app->user->identity->nome
        ],
        [
            'label' => 'Matrícula',
            'value' => $matricula
        ],
        [
            'label' => 'Conta Corrente',
            'value' => ($banco && $agencia && $conta ? 'Banco: ' . $banco . ' Agência: '. $agencia . ' Conta: '. $conta : '')
        ],
        [
            'label' => 'Período',
            'value' => $periodo
        ]
    ],
    'options' => [
        'class' => 'table table-striped table-bordered detail-view',
        'style' => 'width:600px'
    ],
]) ?>

<div class="monitoria-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
        <?php if (!$model->isNewRecord) { ?>
        <?= $form->field($model, 'numProcs')->textInput(['maxlength' => 15, 'style'=>'width:130px', 'readonly' => true]) ?>
        <?php } ?>

        <?= $form->field($model, 'IDDisc')->dropDownList(ArrayHelper::map(Disciplina::find()->orderBy('nomeDisciplina')->asArray()->all(), 'id', 'nomeDisciplina'), 
        	['prompt'=>'Selecione a disciplina', 'style'=>'width:600px']); ?>

        <?= $form->field($model, 'file')->fileInput() ?>

        <?= $form->field($model, 'semestreConclusao')->textInput(['style'=>'width:100px']) ?>
        <?= $form->field($model, 'anoConclusao')->textInput(['style'=>'width:100px']) ?>
        <?= $form->field($model, 'mediaFinal')->textInput(['style'=>'width:100px']) ?>

        <?= $form->field($model, 'bolsa')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

</div>
