<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aluno;

/**
 * AlunoSearch represents the model behind the search form about `app\models\Aluno`.
 */
class AlunoSearch extends Aluno
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Matricula', 'Monitor', 'Bolsista', 'RG', 'CPF'], 'integer'],
            [['Nome', 'Disciplina', 'Curso', 'Email', 'Endereco', 'Telefone', 'Celular', 'Banco', 'Agencia', 'Conta'], 'safe'],
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
        $query = Aluno::find();

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
            'Monitor' => $this->Monitor,
            'Bolsista' => $this->Bolsista,
            'RG' => $this->RG,
            'CPF' => $this->CPF,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'Disciplina', $this->Disciplina])
            ->andFilterWhere(['like', 'Curso', $this->Curso])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Endereco', $this->Endereco])
            ->andFilterWhere(['like', 'Telefone', $this->Telefone])
            ->andFilterWhere(['like', 'Celular', $this->Celular])
            ->andFilterWhere(['like', 'Banco', $this->Banco])
            ->andFilterWhere(['like', 'Agencia', $this->Agencia])
            ->andFilterWhere(['like', 'Conta', $this->Conta]);

        return $dataProvider;
    }
}
