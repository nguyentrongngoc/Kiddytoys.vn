<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $ID
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $pass
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'pass'], 'required'],
            [['name', 'pass'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'pass' => 'Pass',
        ];
    }
}
