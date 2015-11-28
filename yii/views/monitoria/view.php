<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Monitoria */

$this->title = $model->numProcs;
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(isset(Yii::$app->user->identity)){ ?>
<div class="monitoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->perfil == 1 && (Yii::$app->request->referrer) == '/monitoria/minhasinscricoes' )
        {
            Html::a('Atualizar', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']); 
            Html::a('Deletar', ['delete', 'id' => $model->ID], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Você realmente deseja deletar este item?',
                    'method' => 'post',
                ],
            ]);
        } 
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'ID',
            'numProcs',
            'IDAluno',
            'IDDisc',
            'IDCurso',
            'bolsa',
        ],
    ]) ?>

</div>
<?php } ?>
