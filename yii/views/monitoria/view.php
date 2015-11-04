<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */

$this->title = $model->Matricula;
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['Atualizar', 'id' => $model->Matricula], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['Deletar', 'id' => $model->Matricula], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Confirma que quer apagar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'numProcesso',
            'CodDisciplina',
            'Matricula',
            'IDProfessor',
            //'Bolsista',
        ],
    ]) ?>

</div>
