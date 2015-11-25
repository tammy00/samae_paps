<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AproveitamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aproveitamento de Estudos';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if(isset(Yii::$app->user->identity)){ ?>

<div class="aproveitamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="jumbotron">
    	<?php if(Yii::$app->user->identity->perfil == 0) { ?>
    		<p>    <?= Html::a('Fazer solicitação', ['create'], ['class' => 'btn btn-success']) ?>    </p>
	        <p>    <?= Html::a('Verificar status de uma solicitação', ['verificarstatus'], ['class' => 'btn btn-success']) ?>    </p>
    	<?php } ?>
    	<?php if(Yii::$app->user->identity->perfil == 1) { ?>
	        <p>    <?= Html::a('Gerenciar período de solicitação', ['/periodo-aproveitamento/index'], ['class' => 'btn btn-success']) ?>    </p>
	        <p>    <?= Html::a('Avaliar solicitação', ['/aproveitamento/index'], ['class' => 'btn btn-success']) ?>    </p>
    	<?php } ?>
    </div>

</div>
<?php } ?>
