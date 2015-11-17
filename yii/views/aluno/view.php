<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Editar dados', 'url' => ['editardados']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'matricula',
            'nome',
            'email:email',
            'RG',
            'CPF',
            'endereco:ntext',
            'bairro',
            'telResid',
            'telCel',
            'telComerc',
            'IDCurso',
            'IDDisc',
            'banco',
            'agencia',
            'conta',
            //'monitor',
        ],
    ]) ?>

</div>
