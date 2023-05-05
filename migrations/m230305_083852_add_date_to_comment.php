<?php

use yii\db\Migration;

class m230305_083852_add_date_to_comment extends Migration
{
    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    public function down()
    {
        $this->dropColumn('comment','date');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    public function safeDown()
    {
    }
    */
}
