<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Professor */

$this->title = $model->IDProfessor;
$this->params['breadcrumbs'][] = ['label' => 'Professors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IDProfessor' => $model->IDProfessor, 'IDDisciplina' => $model->IDDisciplina], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IDProfessor' => $model->IDProfessor, 'IDDisciplina' => $model->IDDisciplina], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDProfessor',
            'Nome',
            'Email:email',
            'Telefone',
            'IDDisciplina',
        ],
    ]) ?>

</div>
