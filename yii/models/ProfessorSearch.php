<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Professor;

/**
 * ProfessorSearch represents the model behind the search form about `app\models\Professor`.
 */
class ProfessorSearch extends Professor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Telefone'], 'integer'],
            [['Nome', 'Email'], 'safe'],
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
        $query = Professor::find();

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
            'Telefone' => $this->Telefone,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
