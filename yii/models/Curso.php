<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property integer $ID
 * @property string $sigla
 * @property string $nome
 *
 * @property Aluno[] $alunos
 * @property Aproveitamento[] $aproveitamentos
 * @property Disciplina[] $disciplinas
 * @property Monitoria[] $monitorias
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sigla'], 'string', 'max' => 4],
            [['nome'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'sigla' => 'Sigla',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Aluno::className(), ['IDCurso' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAproveitamentos()
    {
        return $this->hasMany(Aproveitamento::className(), ['IDCurso' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinas()
    {
        return $this->hasMany(Disciplina::className(), ['IDCurso' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonitorias()
    {
        return $this->hasMany(Monitoria::className(), ['IDCurso' => 'ID']);
    }
}
