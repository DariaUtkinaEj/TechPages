<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php foreach($articles as $article):?>

                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= Yii::$app->params['webroot'] . $article->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title; ?></a></h6>

                                <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?= $article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="more-link">Continue Reading</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <?= $article->author->name; ?> On <?= $article->getDate();?></span>
                                <ul class="text-center pull-right">
                                    <li><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?= (int) $article->viewed?>
                                </ul>
                            </div>
                        </div>
                    </article>

                <?php endforeach; ?>


                <?php
                echo LinkPager::widget([
                        'pagination' => $pagination,
                ]);
                ?>

            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <?php foreach ($popular as $article):?>
                        <div class="popular-post">
                            <a href="<?= Url::toRoute(['site/view','id'=>$article->id])?>" class="popular-img"><img src="<?=  Yii::$app->params['webroot'] . $article->getImage();?>" alt="">

                                    <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id])?>" class="text-uppercase"><?= $article->title?></a>
                                <span class="p-date"><?= $article->getDate();?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
                        <?php foreach ($recent as $article): ?>
                            <div class="thumb-latest-posts">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?= Url::toRoute(['site/view','id'=>$article->id])?>" class="popular-img"><img src="<?=  Yii::$app->params['webroot'] . $article->getImage();?>" alt="">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="<?= Url::toRoute(['site/view','id'=>$article->id])?>" class="text-uppercase"><?= $article->title?></a>
                                        <span class="p-date"><?= $article->getDate();?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <?php foreach($categories as $category):?>
                                <li>
                                    <a href="<?= Url::toRoute(['site/category','id' => $category->id])?>"><?= $category->title?></a>

                                    <span class="post-count pull-right"> (<?= $category->getArticlesCount();?>)</span>
                                </li>
                            <?php endforeach;?>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>


