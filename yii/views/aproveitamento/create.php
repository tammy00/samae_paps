<?php

use yii\helpers\Html;
use app\models\CursoSearch;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Aproveitamento */

$this->title = 'Solicitação de Aproveitamento de Estudos';
$this->params['breadcrumbs'][] = ['label' => 'Aproveitamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aproveitamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arrayDeCurso' => $arrayDeCurso,
    ]) ?>

</div>
