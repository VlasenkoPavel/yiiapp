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

//        $this->insert("user", [
//            "username" => "admin",
//            "pssword" => password_hash("001qwe"),
//            "auth_key" => \Yii::$app->security->generateRandomString(),
//            "email" => "001email.ru",
//            "reg_date" => date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))
//        ]);
//
//        $this->insert("user", [
//            "username" => "Ivan",
//            "pssword" => password_hash("002qwe"),
//            "auth_key" => \Yii::$app->security->generateRandomString(),
//            "email" => "002email.ru",
//            "reg_date" => date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))
//        ]);
    }

    public function down()
    {
        $this->delete('user', ['username' => 'admin']);
//        return true;
    }
}
