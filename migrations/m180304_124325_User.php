<?php

use yii\db\Migration;

class m180304_124325_User extends Migration
{
    public function up()
    {
        $this->createTable("user", [
            "id" => $this->primaryKey(),
            "username" => $this->string(50)->notNull(),
            "password" => $this->string(255)->notNull(),
            "auth_key" => $this->string()->notNull(),
            "email" => $this->string(100)->notNull(),
            "reg_date" => $this->dateTime()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable("user");
    }

}
