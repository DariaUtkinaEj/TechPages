<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'All Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(!empty($users)):?>

        <table class="table">
            <thead>
            <tr>
                <td>#</td>
                <td>name</td>
                <td>email</td>
                <td>is admin</td>
            </tr>
            </thead>

            <tbody>
            <?php foreach($users as $user):?>
                <tr>
                    <td><?= $user->id?></td>
                    <td><?= $user->name?></td>
                    <td><?= $user->email?></td>
                    <td><?= $user->isAdmin?></td>
                    <td>
                        <a class="btn btn-danger" href="<?= Url::toRoute(['user/delete', 'id' => $user->id]); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    <?php endif;?>
</div>