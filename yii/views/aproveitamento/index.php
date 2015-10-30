<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AproveitamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitações de Aproveitamento de Estudos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aproveitamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Fazer solicitação', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NumProcesso',
            'idAluno',
            'nomeAluno',
            'status',
            'matriculaUFAM',
            // 'Endereco:ntext',
            // 'cursoUFAM',
            // 'telefoneResidencial',
            // 'telefoneComercial',
            // 'telefoneCelular',
            // 'formaIngresso',
            // 'disciplinaIES',
            // 'codIES',
            // 'creditoIES',
            // 'horaIES',
            // 'mediaIES',
            // 'disciplinaUFAM',
            // 'codUFAM',
            // 'creditoUFAM',
            // 'horaUFAM',
            // 'bairro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
