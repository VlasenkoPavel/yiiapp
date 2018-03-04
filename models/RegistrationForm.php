<?php

namespace app\models;

use yii\base\Model;

class RegistrationForm extends Model
{
    public $name;
    public $email;
    public $password;

    public function attributeLabels()
    {
        return [
            'name' => \Yii::t("app", "Enter your name:"),
            'email' => \Yii::t("app", 'Enter your email:'),
            'password' => \Yii::t("app", 'Enter your password:'),
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            ['email', 'email'],
            ['name', 'string', 'min' => 3, 'max' => 50],
            ['password', 'string', 'min' => 6, 'max' => 255]
        ];
    }
}