<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aproveitamento;

/**
 * AproveitamentoSearch represents the model behind the search form about `app\models\Aproveitamento`.
 */
class AproveitamentoSearch extends Aproveitamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NumProcesso', 'nomeAluno', 'status', 'matriculaUFAM', 'cursoUFAM', 'disciplinaIES', 'codIES', 'mediaIES'], 'safe'],
            [['idAluno', 'formaIngresso', 'creditoIES', 'horaIES', 'creditoUFAM', 'horaUFAM'], 'integer'],
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
        $query = Aproveitamento::find();

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
            'idAluno' => $this->idAluno,
            'formaIngresso' => $this->formaIngresso,
            'creditoIES' => $this->creditoIES,
            'horaIES' => $this->horaIES,
            'creditoUFAM' => $this->creditoUFAM,
            'horaUFAM' => $this->horaUFAM,
        ]);

        $query->andFilterWhere(['like', 'NumProcesso', $this->NumProcesso])
            ->andFilterWhere(['like', 'nomeAluno', $this->nomeAluno])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'matriculaUFAM', $this->matriculaUFAM])
            ->andFilterWhere(['like', 'cursoUFAM', $this->cursoUFAM])
            ->andFilterWhere(['like', 'disciplinaIES', $this->disciplinaIES])
            ->andFilterWhere(['like', 'codIES', $this->codIES])
            ->andFilterWhere(['like', 'mediaIES', $this->mediaIES]);

        return $dataProvider;
    }
}
