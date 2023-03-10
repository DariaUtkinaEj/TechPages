<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
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

    <nav class="navbar main-menu navbar-default">
        <div class="container">
            <div class="menu-content">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/public/images/logo.png" alt=""></a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav text-uppercase">
                        <li><a href="<?= Url::toRoute(['site/index'])?>">Home</a></li>
                    </ul>
                    <div class="i_con">
                        <ul class="nav navbar-nav text-uppercase">
                            <?php if(Yii::$app->user->isGuest):?>
                                <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                                <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                            <?php else: ?>
                                <?= Html::beginForm(['/auth/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->name . ')',
                                    ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                                )
                                . Html::endForm() ?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <footer class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <div class="about-img"><img src="/public/images/logo2.png" alt=""></div>
                        <div class="about-content"> I just want to share something wonderful I found on the Internet, help you to study and make the world a little kinder.

                        </div>
                        <div class="address">
                            <h4 class="text-uppercase">contact Info</h4>

                            <p> Ufa, Russia </p>

                            <p> Phone: +7 996 105 76 32</p>

                            <p> github: @DariaUtkinaEj </p>
                        </div>
                    </aside>
                </div>

                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase"></h3>

                    </aside>
                </div>
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase">Thank you for watching!</h3>


                        <div class="custom-post">
                            <div>
                                <a href="#"><img src="/public/images/footer-img.png" alt=""></a>
                            </div>
                            <div>
                                <a href="#" class="text-uppercase">??????????????????????: https://github.com/DariaUtkinaEj</a>
                                <span class="p-date"></span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">&copy; 2023 <a href="#">TechPages, </a> Built with <i
                                class="fa fa-heart"></i> by <a href="#">Daria Utkina</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>