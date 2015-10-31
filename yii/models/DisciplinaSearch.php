<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Disciplina;

/**
 * DisciplinaSearch represents the model behind the search form about `app\models\Disciplina`.
 */
class DisciplinaSearch extends Disciplina
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'CodDisciplina', 'CargaHoraria', 'Credito', 'Laboratorio', 'QTO', 'QAT', 'CodProfessor', 'Monitoria'], 'integer'],
            [['Nome', 'IDCurso', 'Periodo', 'CodTurma'], 'safe'],
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
        $query = Disciplina::find();

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
            'CodDisciplina' => $this->CodDisciplina,
            'CargaHoraria' => $this->CargaHoraria,
            'Credito' => $this->Credito,
            'Laboratorio' => $this->Laboratorio,
            'QTO' => $this->QTO,
            'QAT' => $this->QAT,
            'CodProfessor' => $this->CodProfessor,
            'Monitoria' => $this->Monitoria,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'IDCurso', $this->IDCurso])
            ->andFilterWhere(['like', 'Periodo', $this->Periodo])
            ->andFilterWhere(['like', 'CodTurma', $this->CodTurma]);

        return $dataProvider;
    }
}
