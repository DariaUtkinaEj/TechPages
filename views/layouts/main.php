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
                        <div class="about-img"
                             style="
                               background-image: url('/public/images/logo2.png');
                               background-position: center center;
                               width: 320px;
                               height: 227px;
                             "
                        ></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget">
                        <div class="about-content" style="padding-top: 0; font-size: 17px; text-align: center;">
                            I just want to share something wonderful I found on the Internet, help you to study and make the world a little kinder.
                        </div>
                        <div class="address" style="padding-top: 0; text-align: center;">
                            <h4 class="text-uppercase" style="margin-top: 20px; margin-bottom: 15px; font-size: 20px; font-weight: 700;">
                                contact Info
                            </h4>
                            <p style="font-size: 16px; margin-bottom: 13px;"> Ufa, Russia </p>
                            <p style="font-size: 16px; margin-bottom: 13px;">
                                Phone: <a href="tel:+7(996)105-76-32" target="_blank" style="color: #00bff3;">
                                    +7 (996) 105-76-32
                                </a>
                            </p>
                            <p style="font-size: 16px;">github:&nbsp;
                                <a href="https://github.com/DariaUtkinaEj" target="_blank" style="color: #00bff3;">
                                    @DariaUtkinaEj
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding-left: 55px;">
                    <div class="footer-widget">
                        <a href="#">
                            <div class="about-img"
                                 style="
                                   background-image: url('/public/images/footer-img.png');
                                   background-position: center center;
                                   width: 299px;
                                   height: 190px;
                                   background-size: 105%;
                                 "
                            ></div>
                        </a>
                        <a href="https://github.com/DariaUtkinaEj" target="_blank" style="color: #00bff3; font-size: 22px;">
                            Подпишись на мой гитхаб!
                        </a>
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