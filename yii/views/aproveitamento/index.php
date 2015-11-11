<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AproveitamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aproveitamento de Estudos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aproveitamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="jumbotron">
        <p>    <?= Html::a('Gerenciar período de solicitação', ['gerenciarperiodo'], ['class' => 'btn btn-success']) ?>    </p>
        <p>    <?= Html::a('Fazer solicitação', ['create'], ['class' => 'btn btn-success']) ?>    </p>
        <p>    <?= Html::a('Verificar status de uma solicitação', ['verificarstatus'], ['class' => 'btn btn-success']) ?>    </p>
    </div>

</div>
