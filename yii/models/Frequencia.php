<?php

namespace app\models;

use Yii;
use app\models\Aluno;

/**
 * This is the model class for table "frequencia".
 *
 * @property integer $ID
 * @property integer $IDMonitoria
 * @property string $data
 * @property double $ch
 * @property string $atividade
 */
class Frequencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'frequencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDMonitoria', 'data', 'ch'], 'required'],
            [['IDMonitoria'], 'integer'],
            [['data'], 'safe'],
            [['ch'], 'number'],
            [['atividade'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'IDMonitoria' => 'Nº Monitoria',
            'data' => 'Data',
            'ch' => 'Carga Horária',
            'atividade' => 'Atividade',
        ];
    }

    public afterFind()
    {
        $aluno = Aluno::findOne(['CPF' => Yii::$app->user->identity->login]);
        $this->IDMonitoria = $aluno->nome;
    }
}
