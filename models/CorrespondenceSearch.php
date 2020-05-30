<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Correspondence;

/**
 * CorrespondenceSearch represents the model behind the search form of `app\models\Correspondence`.
 */
class CorrespondenceSearch extends Correspondence
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'check_receive', 'is_received'], 'integer'],
            [['code', 'corr_type', 'entity_type', 'sender_info', 'receiver_info'], 'safe'],
            [['postal_value', 'weight'], 'number'],
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
        $query = Correspondence::find();

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
            'id' => $this->id,
            'postal_value' => $this->postal_value,
            'weight' => $this->weight,
            'check_receive' => $this->check_receive,
            'is_received' => $this->is_received,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'corr_type', $this->corr_type])
            ->andFilterWhere(['like', 'entity_type', $this->entity_type])
            ->andFilterWhere(['like', 'sender_info', $this->sender_info])
            ->andFilterWhere(['like', 'receiver_info', $this->receiver_info]);

        return $dataProvider;
    }
}
