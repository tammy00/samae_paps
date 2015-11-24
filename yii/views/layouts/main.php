<?php

/* @var $this \yii\web\View */
/* @var $content string */

/**
 * Tammy
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;
use yii\helpers\Url;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

    <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'Sistema de Apoio a Monitoria e Aproveitamento de Estudos',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'Monitoria', 'url' => ['/monitoria/index']],
                    ['label' => 'Aproveitamento de Estudos', 'url' => ['/aproveitamento/index']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        [
                            'label' => 'Logout (' . Yii::$app->user->identity->login . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ],
                ],
            ]);

            NavBar::end();
            ?>
        </div>


        <div >  
        <?php 
            echo SideNav::widget([
                'type' => SideNav::TYPE_DEFAULT,
                'heading' => 'Opções',
                'options' => ['class' => 'sidenav-tammy'],   
                'items' => [
                    [
                        'url' => '/site/index',
                        'label' => 'Home',
                        'icon' => 'home'
                    ],
                    [
                        'label' => 'Monitoria',
                        
                        'icon' => 'book',
                        //if (Yii::$app->user->identity->perfil == 0 ) {
                            'items' => [
                                ['label' => 'Cadastro', 'icon'=>'info-sign', 'url'=> Url::to(['/monitoria/create'])], 
                                ['label' => 'Frequência Individual', 'icon'=>'book', 'url'=>Url::to(['/monitoria/freqindividual'])],
                                ['label' => 'Relatório Semestral', 'icon'=>'book', 'url'=>Url::to(['/monitoria/index'])],
                            ],
                        //}
                       // if (Yii::$app->user->identity->perfil == 1) {
                            'items' => [
                                ['label' => 'Cadastro', 'icon'=>'info-sign', 'url'=> Url::to(['/monitoria/create'])], 
                                ['label' => 'Frequência Individual', 'icon'=>'book', 'url'=>Url::to(['/monitoria/freqindividual'])],
                                ['label' => 'Relatório Semestral', 'icon'=>'book', 'url'=>Url::to(['/monitoria/index'])],
                            ],
                       // }
                    ],
                    [
                        'label' => 'Aproveitamento de Estudos',
                        
                        'icon' => 'book',
                        'items' => [
                           ['label' => 'Fazer solicitação', 'icon'=>'info-sign', 'url'=>Url::to(['/aproveitamento/create'])],
                                ['label' => 'Status de Solicitação', 'icon'=>'bullhorn', 'url'=>Url::to(['/aproveitamento/status'])],
                        ],
                    ],
                ],
            ]);
        ?>
                <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?=     $content    ?>
        </div>
    </div>






    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; IComp - Instituto de Computação <?= date('Y') ?> </p>

            
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
