<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\CursoSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = 'Editar perfil: ' . ' ' . $model->matricula;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->matricula, 'url' => ['view', 'id' => $model->matricula]];
$this->params['breadcrumbs'][] = 'Editar perfil';
?>
<div class="aluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arrayDeCurso' => $arrayDeCurso,
    ]) ?>

</div>
