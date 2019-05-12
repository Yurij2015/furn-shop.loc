<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $idnews News id
 * @property string $title News title
 * @property string $content News content
 * @property int $created_at Created at
 * @property int $updated_at Updated at
 * @property int $newscategory_idnewscategory News category id
 *
 * @property Newscategory $newscategoryIdnewscategory
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'created_at', 'newscategory_idnewscategory'], 'required'],
            [['content'], 'string'],
            [['created_at', 'updated_at', 'newscategory_idnewscategory'], 'integer'],
            [['title'], 'string', 'max' => 45],
            [['newscategory_idnewscategory'], 'exist', 'skipOnError' => true, 'targetClass' => Newscategory::className(), 'targetAttribute' => ['newscategory_idnewscategory' => 'idnewscategory']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idnews' => 'News id',
            'title' => 'News title',
            'content' => 'News content',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
            'newscategory_idnewscategory' => 'News category id',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewscategoryIdnewscategory()
    {
        return $this->hasOne(Newscategory::className(), ['idnewscategory' => 'newscategory_idnewscategory']);
    }
}
