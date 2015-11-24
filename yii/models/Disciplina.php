<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property integer $id
 * @property string $codDisciplina
 * @property string $nomeDisciplina
 * @property integer $cargaHoraria
 * @property integer $creditos
 *
 * @property DisciplinaPeriodo[] $disciplinaPeriodos
 */
class Disciplina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disciplina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codDisciplina', 'nomeDisciplina', 'cargaHoraria', 'creditos'], 'required', 'message'=>'Este campo é obrigatório'],
            [['cargaHoraria', 'creditos'], 'integer'],
            [['codDisciplina'], 'string', 'max' => 10],
            [['nomeDisciplina'], 'string', 'max' => 150],
            [['codDisciplina'], 'unique', 'message'=>'O código da disciplina já existe no sistema.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codDisciplina' => 'Código Disciplina',
            'nomeDisciplina' => 'Nome Disciplina',
            'cargaHoraria' => 'Carga Horária',
            'creditos' => 'Créditos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinaPeriodos()
    {
        return $this->hasMany(DisciplinaPeriodo::className(), ['idDisciplina' => 'id']);
    }
}
