<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\CursoSearch;


/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = 'Editar perfil';
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arrayDeCurso' => $arrayDeCurso,
    ]) ?>

</div>
