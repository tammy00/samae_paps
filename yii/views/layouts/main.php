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

AppAsset::register($this);  ?>

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

        <div class="wrap">
            <div class="col-sm-3">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <span class="visible-xs navbar-brand">Sidebar Menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Monitoria <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?r=monitoria/create">Inscrição</a></li>
                                        <li><a href="index.php?r=monitoria/frequenciaindividual">Frequência Individual</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aproveitamento de Estudos<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?r=aproveitamento/create">Fazer Solicitação</a></li>
                                        <li><a href="index.php?r=aproveitamento/status">Status de Solicitação</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php?r=aluno/editardados">Atualizar Cadastro</a></li>
                                <!-- <li><a href="#">Reviews <span class="badge">1,118</span></a></li> -->
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
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
