<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property integer $ProductID
 * @property string $category
 * @property integer $UserID
 * @property integer $QuantityBuy
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductID', 'category', 'UserID', 'QuantityBuy'], 'required'],
            [['ProductID', 'UserID', 'QuantityBuy'], 'integer'],
            [['category'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductID' => 'Product ID',
            'category' => 'Category',
            'UserID' => 'User ID',
            'QuantityBuy' => 'Quantity Buy',
        ];
    }
}
