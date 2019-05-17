<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $idproduct Product Id
 * @property int $prodcategory_idcategory Product Category
 * @property string $productname Product Title
 * @property string $prodcontent Product content
 * @property double $price Price
 * @property string $keywords Keywords
 * @property string $proddecription Product Description
 * @property string $img Product image
 * @property string $hit Hit product
 * @property string $new New product
 * @property string $sale Product sale
 *
 * @property Odrer[] $odrers
 * @property Prodcategory $prodcategoryIdcategory
 */
class Product extends \yii\db\ActiveRecord
{

    public $image;
    public $gallery;


    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prodcategory_idcategory', 'price', 'hit', 'new', 'sale'], 'required'],
            [['prodcategory_idcategory'], 'integer'],
            [['prodcontent', 'hit', 'new', 'sale'], 'string'],
            [['price'], 'number'],
            [['productname', 'keywords', 'proddecription', 'img'], 'string', 'max' => 255],
            [['prodcategory_idcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Prodcategory::className(), 'targetAttribute' => ['prodcategory_idcategory' => 'idcategory']],
            [['image'], 'file', 'extensions' => 'png, jpg'],
           // [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idproduct' => 'Product Id',
            'prodcategory_idcategory' => 'Категория',
            'productname' => 'Наименование',
            'prodcontent' => 'Дополнительная информация',
            'price' => 'Стоимость',
            'keywords' => 'Keywords',
            'proddecription' => 'Product Description',
            'image' => 'Изображение',
            'hit' => 'Hit product',
            'new' => 'New product',
            'sale' => 'Product sale',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOdrers()
    {
        return $this->hasMany(Odrer::className(), ['product_idproduct' => 'idproduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdcategory()
    {
        return $this->hasOne(Prodcategory::className(), ['idcategory' => 'prodcategory_idcategory']);
    }

    public function upload(){
        if ($this->validate()) {
            $path = 'safe/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            unlink($path);
        }
    }
}
