<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */

$this->title = 'Inscrição para Monitoria';
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
