<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Frequencia;

/**
 * FrequenciaSearch represents the model behind the search form about `app\models\Frequencia`.
 */
class FrequenciaSearch extends Frequencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'IDMonitoria'], 'integer'],
            [['data', 'atividade'], 'safe'],
            [['ch'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Frequencia::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'IDMonitoria' => $this->IDMonitoria,
            'data' => $this->data,
            'ch' => $this->ch,
        ]);

        $query->andFilterWhere(['like', 'atividade', $this->atividade]);

        return $dataProvider;
    }
}
