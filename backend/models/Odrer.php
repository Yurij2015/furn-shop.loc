<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "odrer".
 *
 * @property int $idodrer
 * @property int $created_at
 * @property int $updated_at
 * @property int $user_id
 * @property int $product_idproduct
 * @property string $customer
 *
 * @property Product $productIdproduct
 * @property User $user
 */
class Odrer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'odrer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'product_idproduct'], 'required'],
            [['created_at', 'updated_at', 'user_id', 'product_idproduct'], 'integer'],
            [['customer'], 'string', 'max' => 250],
            [['product_idproduct'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_idproduct' => 'idproduct']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idodrer' => 'Idodrer',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'product_idproduct' => 'Product Idproduct',
            'customer' => 'Customer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductIdproduct()
    {
        return $this->hasOne(Product::className(), ['idproduct' => 'product_idproduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
