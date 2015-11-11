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
            [['ID', 'matricula', 'RG', 'CPF', 'IDCurso', 'IDDisc', 'monitor'], 'integer'],
            [['nome', 'email', 'endereco', 'bairro', 'telResid', 'telCel', 'telComerc', 'banco', 'agencia', 'conta'], 'safe'],
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
            'ID' => $this->ID,
            'matricula' => $this->matricula,
            'RG' => $this->RG,
            'CPF' => $this->CPF,
            'IDCurso' => $this->IDCurso,
            'IDDisc' => $this->IDDisc,
            'monitor' => $this->monitor,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'telResid', $this->telResid])
            ->andFilterWhere(['like', 'telCel', $this->telCel])
            ->andFilterWhere(['like', 'telComerc', $this->telComerc])
            ->andFilterWhere(['like', 'banco', $this->banco])
            ->andFilterWhere(['like', 'agencia', $this->agencia])
            ->andFilterWhere(['like', 'conta', $this->conta]);

        return $dataProvider;
    }
}
