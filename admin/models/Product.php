<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $Idproduce
 * @property string $productname
 * @property double $price
 * @property string $category
 * @property string $imglink
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productname', 'price', 'category', 'imglink'], 'required'],
            [['price'], 'number'],
            [['productname', 'imglink'], 'string', 'max' => 200],
            [['category'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idproduce' => 'Idproduce',
            'productname' => 'Productname',
            'price' => 'Price',
            'category' => 'Category',
            'imglink' => 'Imglink',
        ];
    }
}
