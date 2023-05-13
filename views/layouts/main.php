<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\helpers\Url;

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
                    <!--  <a class="navbar-brand" href="<?= Url::toRoute(['site/index'])?>"><img src="/tech.pages.loc/web/public/images/logo.png" alt=""></a> -->
                    <a class="navbar-brand" style="font-family: Arial,Helvetica Neue,Helvetica,sans-serif;" href="<?= Url::toRoute(['site/index'])?>">Tech Pages</a>
                </div>


                <div class="collapse navbar-collapse" style="min-height: 66px;" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav text-uppercase">
                        <!--                        <li><a href="--><?php //= Url::toRoute(['site/index'])?><!--">Home</a></li>-->
                    </ul>
                    <div class="i_con">
                        <ul class="nav navbar-nav text-uppercase">
                            <?php if(Yii::$app->user->isGuest):?>
                                <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                                <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                            <?php else: ?>
                                <?= Html::beginForm(['/auth/logout'], 'post') ?>
                                <li>
                                    <?= Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->name . ')',
                                        ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                                    )
                                    . Html::endForm() ?>
                                </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <footer class="footer-widget-section" style="margin-bottom: -15px;">
        <div class="container">
            <div class="row">
                <div style="margin: 30px 0 -30px 0;">
                    <h2 class="text-uppercase" style="color: #FFFFFF; text-align: center;">
                        <?= Yii::t('app', 'Thank you for watching!'); ?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <img src="<?= Yii::$app->params['webroot'] ?>/public/images/logo2.png">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget">
                        <div class="about-content" style="padding-top: 0; font-size: 17px; text-align: center;">
                            I just want to share something wonderful I found on the Internet, help you to study and make the world a little kinder.
                        </div>

                    </div>
                </div>
                <div class="col-md-4" style="padding-left: 55px;">
                    <div class="footer-widget">
                        <div class="address" style="padding-top: 0; text-align: right;">

                            <div style="padding-right: 15px;">
                                <h4 class="text-uppercase" style="margin-top: 20px; margin-bottom: 15px; font-size: 20px; font-weight: 700;">
                                    contact Info
                                </h4>
                                <p style="font-size: 16px; margin-bottom: 13px;"> Ufa, Russia </p>
                                <p style="font-size: 16px; margin-bottom: 13px;">
                                    Phone: <a href="tel:+7(996)105-76-32" target="_blank" style="color: #00bff3;">
                                        +7 (996) 105-76-32
                                    </a>
                                </p>
                            </div>
                            <iframe src="https://ghbtns.com/github-btn.html?user=DariaUtkinaEj&type=follow&count=true&size=large" frameborder="0" scrolling="0" width="230" height="30" title="GitHub"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">&copy; <?= Date('Y'); ?>
                            <a href="#">TechPages, </a> Built with
                            <i class="fa fa-heart"></i> by
                            <a href="#">Daria Utkina</a>
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