<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Monitoria;


/**
 * MonitoriaSearch represents the model behind the search form about `app\models\Monitoria`.
 */
class MonitoriaSearch extends Monitoria
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numProcesso', 'CodDisciplina'], 'safe'],
            [['Matricula', 'IDProfessor', 'Bolsista'], 'integer'],
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
        $query = Monitoria::find();

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
            'Matricula' => $this->Matricula,
            'IDProfessor' => $this->IDProfessor,
            'Bolsista' => $this->Bolsista,
        ]);

        $query->andFilterWhere(['like', 'numProcesso', $this->numProcesso])
            ->andFilterWhere(['like', 'CodDisciplina', $this->CodDisciplina]);

        return $dataProvider;
    }
}
