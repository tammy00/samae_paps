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
            [['ID', 'IDCurso', 'IDProf', 'ch', 'credito', 'qat', 'qto', 'lab', 'monitoria'], 'integer'],
            [['nome', 'codigo', 'periodo', 'codTurma'], 'safe'],
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
            'IDCurso' => $this->IDCurso,
            'IDProf' => $this->IDProf,
            'ch' => $this->ch,
            'credito' => $this->credito,
            'qat' => $this->qat,
            'qto' => $this->qto,
            'lab' => $this->lab,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'periodo', $this->periodo])
            ->andFilterWhere(['like', 'codTurma', $this->codTurma]);

        return $dataProvider;
    }
}
