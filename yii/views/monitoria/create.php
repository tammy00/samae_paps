<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\CursoSearch;
use app\models\DisciplinaSearch;

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
        'arrayDeCurso' => $arrayDeCurso,
        'arrayDeDisc'  => $arrayDeDisc,
    ]) ?>

    <br>Declaro para os devidos fins, que: <br>

    a) sou o (a) TITULAR da CONTA CORRENTE acima descrita:<br>
    b) a conclusão do meu curso de graduacao está prevista para o _________ semestre do ano de __ ______;<br>
    c) NÃO exerco outra atividade REMUNERADA através de bolsa nesta universidade;<br>
    d) obtive aprovacão na disciplina objeto da MONITORIA, com média final (  );<br>
    e) disponho de 12 horas semanais para exercer a monitoria;<br>
    f) tenho conhecimento das normas do Programa de Monitoria;<br>
    g) responsabilizo-me pelas informacões acima.<br>

</div>
