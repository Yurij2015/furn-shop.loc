<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prodcategory".
 *
 * @property int $idcategory
 * @property string $pcategoryname
 * @property string $pcategorydescription
 * @property int $parentid
 * @property string $keywords
 *
 * @property Product[] $products
 */
class Prodcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pcategoryname', 'pcategorydescription'], 'required'],
            [['parentid'], 'integer'],
            [['pcategoryname'], 'string', 'max' => 100],
            [['pcategorydescription'], 'string', 'max' => 250],
            [['keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcategory' => 'Idcategory',
            'pcategoryname' => 'Pcategoryname',
            'pcategorydescription' => 'Pcategorydescription',
            'parentid' => 'Parentid',
            'keywords' => 'Keywords',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['prodcategory_idcategory' => 'idcategory']);
    }
}
