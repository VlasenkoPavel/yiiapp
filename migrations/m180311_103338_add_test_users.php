<?php

use yii\db\Migration;

/**
 * Class m180311_103338_addtestusers
 */
class m180311_103338_add_test_users extends Migration
{
    public function up()
    {
        $this->insert('user', [
            'username' => 'admin',
            'name' => 'Pavel',
            'surname' => 'Vlasenko',
            'password' => password_hash('001qwe', PASSWORD_DEFAULT),
            'email' => 'admin-email.ru',
            'access_token' => \Yii::$app->security->generateRandomString(),
            'created_at' => date('Y-m-d')
        ]);

        $this->insert('user', [
            'username' => 'userIvan',
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'password' => password_hash('001qwe', PASSWORD_DEFAULT),
            'email' => 'ivan-email.ru',
            'access_token' => \Yii::$app->security->generateRandomString(),
            'created_at' => date('Y-m-d')
        ]);

        $this->insert('user', [
            'username' => 'userPetr',
            'name' => 'Petr',
            'surname' => 'Petrov',
            'password' => password_hash('001qwe', PASSWORD_DEFAULT),
            'email' => 'petr-email.ru',
            'access_token' => \Yii::$app->security->generateRandomString(),
            'created_at' => date('Y-m-d')
        ]);

    }

    public function down()
    {
        $this->delete('user', ['username' => 'admin']);
        $this->delete('user', ['username' => 'userIvan']);
        $this->delete('user', ['username' => 'userPetr']);
    }
}
