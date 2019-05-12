<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Odrer;

/**
 * OdrerSearch represents the model behind the search form of `backend\models\Odrer`.
 */
class OdrerSearch extends Odrer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idodrer', 'created_at', 'updated_at', 'user_id', 'product_idproduct'], 'integer'],
            [['customer'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Odrer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idodrer' => $this->idodrer,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'product_idproduct' => $this->product_idproduct,
        ]);

        $query->andFilterWhere(['like', 'customer', $this->customer]);

        return $dataProvider;
    }
}
