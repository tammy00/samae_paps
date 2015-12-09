<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="monitoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->perfil === 1) { ?>
            <?= Html::a('Atualizar', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']);  ?>
            <?= Html::a('Deletar', ['delete', 'id' => $model->ID], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Você realmente deseja deletar este item?',
                    'method' => 'post',
                ],
            ]); ?>
        <?php } ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'ID',
            'IDAluno',
            'IDDisc',
            'bolsa',
        ],
    ]) ?>

</div>
