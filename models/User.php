<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 04.03.18
 * Time: 14:13
 */

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord

{
//    public $id;
//    public $username;
//    public $password;
//    public $email;
//    public $auth_key;
//    public $reg_date;

    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['username', 'password', 'email', 'auth_key', 'reg_date'], 'required'],
            ['email', 'email'],
        ];
    }
}