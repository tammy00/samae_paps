<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periodoaproveitamento".
 *
 * @property integer $ID
 * @property string $dataInicio
 * @property string $dataFim
 * @property string $periodo
 */
class PeriodoAproveitamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periodoaproveitamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dataInicio', 'dataFim', 'periodo', 'ano'], 'required', 'message'=>'Este campo é obrigatório.'],
            [['dataInicio', 'dataFim'], 'safe'],
            [['ano'], 'integer'],
            [['periodo'], 'string', 'max' => 10, 'min' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'dataInicio' => 'Data Inicial   ',
            'dataFim' => 'Data Final   ',
            'periodo' => 'Período Letivo',
            'ano' => 'Ano',
        ];
    }
}
