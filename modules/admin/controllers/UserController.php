<?php

namespace app\modules\admin\controllers;

use app\models\User;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        $users = User::find()->orderBy('id desc')->all();

        return $this->render('index', ['users' => $users]);
    }

    public function actionDelete($id)
    {
        $user = User::findOne($id);
        if ($user->delete()) {
            return $this->redirect(['user/index']);
        }
    }

}
