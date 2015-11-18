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
            [['ID', 'IDAluno', 'IDCurso', 'formaIngreso', 'discIES', 'codIES', 'credIES', 'chIES', 'mediaIES', 'codUFAM', 'chUFAM', 'credUFAM'], 'integer'],
            [['numProcs', 'status'], 'safe'],
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
            'ID' => $this->ID,
            'IDAluno' => $this->IDAluno,
            'IDCurso' => $this->IDCurso,
            'formaIngreso' => $this->formaIngreso,
            'discIES' => $this->discIES,
            'codIES' => $this->codIES,
            'credIES' => $this->credIES,
            'chIES' => $this->chIES,
            'mediaIES' => $this->mediaIES,
            'codUFAM' => $this->codUFAM,
            'chUFAM' => $this->chUFAM,
            'credUFAM' => $this->credUFAM,
        ]);

        $query->andFilterWhere(['like', 'numProcs', $this->numProcs])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
