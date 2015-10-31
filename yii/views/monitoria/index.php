<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonitoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monitoria';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="jumbotron">
        <p> 
            <?= Html::a('Selecionar Disciplinas', ['selecionardisciplinas'], ['class' => 'btn btn-success']) ?>   
            <?= Html::a('Fazer Plano Semestral', ['fazerplanosemestral'], ['class' => 'btn btn-success']) ?>    
        </p>
        <p> 
            <?= Html::a('Gerenciar período de cadastro', ['gerenciarperiodo'], ['class' => 'btn btn-success']) ?> 
            <?= Html::a('Cadastro como monitor', ['create'], ['class' => 'btn btn-success']) ?>              
        </p>
        <p> 
            <?= Html::a('Gerar Plano Semestral da Disciplina', ['gerarplanosemestraldisciplina'], ['class' => 'btn btn-success']) ?> 
            <?= Html::a('Gerar Quadro Geral', ['gerarquadrogeral'], ['class' => 'btn btn-success']) ?>    
        </p>
        <p>    
            <?= Html::a('Gerar Frequência Geral', ['gerarfrequenciageral'], ['class' => 'btn btn-success']) ?>    
            <?= Html::a('Frequência Individual', ['frequenciaindividual'], ['class' => 'btn btn-success']) ?>
        </p>
        <p>    
            <?= Html::a('Gerar Relatório Semestral', ['gerarrelatoriosemestral'], ['class' => 'btn btn-success']) ?>    
            <?= Html::a('Gerar Relatório Anual', ['gerarrelatorioanual'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

</div>
