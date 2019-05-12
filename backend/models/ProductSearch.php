<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form of `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idproduct', 'prodcategory_idcategory'], 'integer'],
            [['productname', 'prodcontent', 'keywords', 'proddecription', 'img', 'hit', 'new', 'sale'], 'safe'],
            [['price'], 'number'],
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
        $query = Product::find();

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
            'idproduct' => $this->idproduct,
            'prodcategory_idcategory' => $this->prodcategory_idcategory,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'productname', $this->productname])
            ->andFilterWhere(['like', 'prodcontent', $this->prodcontent])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'proddecription', $this->proddecription])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'hit', $this->hit])
            ->andFilterWhere(['like', 'new', $this->new])
            ->andFilterWhere(['like', 'sale', $this->sale]);

        return $dataProvider;
    }
}
