<?php

use yii\db\Migration;

/**
 * Class m180304_124700_User
 */
class m180304_124700_User extends Migration
{
    public function up()
    {
        $this->insert("user", [
            "username" => "admin",
            "password" => password_hash("001qwe", PASSWORD_DEFAULT),
            "email" => "001email.ru",
            "auth_key" => \Yii::$app->security->generateRandomString(),
            "reg_date" => date("Y-m-d")
        ]);

        $this->insert("user", [
            "username" => "Ivan",
            "password" => password_hash("002qwe", PASSWORD_DEFAULT),
            "email" => "002email.ru",
            "auth_key" => \Yii::$app->security->generateRandomString(),
            "reg_date" => date("Y-m-d")
        ]);
    }

    public function down()
    {
        $this->delete('user', ['username' => 'admin']);
        $this->delete('user', ['username' => 'Ivan']);
    }
}
