<?php

use app\models\User;
use yii\db\Migration;

class m240210_083852_add_password_hash_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('user','password_hash', $this->string(255)->notNull()->defaultValue('sfggsgds'));

        $users = User::find()->all();

        /** @var User $user */
        foreach ($users as $user) {
            $user->setPassword($user->password);
            $user->save();
        }

        $this->dropColumn('user','password');
        $this->alterColumn('user','password_hash', $this->string(255)->notNull());
    }

    public function down()
    {
    }
}
