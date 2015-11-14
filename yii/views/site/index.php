<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Sistema de Apoio a Monitoria e Aproveitamento de Estudos';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1></h1>

        <p class="lead"></p>

        <p> <?= Html::a('MONITORIA', ['/monitoria/index'], ['class'=>'btn btn-primary']) ?></p>
        <p> <?= Html::a('Aproveitamento de Estudos', ['/aproveitamento/index'], ['class'=>'btn btn-primary']) ?> </p>
        <p> <?= Html::a('Cadastrar usuário', ['/usuario/create'], ['class'=>'btn btn-primary']) ?></p>
        <p> <?= Html::a('Editar Perfil', ['/aluno/editardados'], ['class'=>'btn btn-primary']) ?></p>
    </div>
</div>
