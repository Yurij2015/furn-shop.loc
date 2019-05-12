<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "newscategory".
 *
 * @property int $idnewscategory News category Id
 * @property string $ncatname News category title
 * @property string $ncdescription News category description
 *
 * @property News[] $news
 */
class Newscategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newscategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ncatname'], 'string', 'max' => 45],
            [['ncdescription'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idnewscategory' => 'News category Id',
            'ncatname' => 'News category title',
            'ncdescription' => 'News category description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['newscategory_idnewscategory' => 'idnewscategory']);
    }
}
