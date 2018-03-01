<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "claim".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $date_create
 */
class Claim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'claim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'email', 'phone', 'date_create'], 'required'],
            [['date_create'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['address', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'date_create' => 'Date Create',
        ];
    }
}
