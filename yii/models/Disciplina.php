<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property integer $ID
 * @property string $nome
 * @property string $codigo
 * @property integer $IDCurso
 * @property integer $IDProf
 * @property integer $ch
 * @property integer $credito
 * @property string $periodo
 * @property integer $qat
 * @property integer $qto
 * @property string $codTurma
 * @property integer $lab
 *
 * @property Aluno[] $alunos
 * @property Curso $iDCurso
 * @property Monitoria[] $monitorias
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
            [['nome', 'codigo', 'IDCurso', 'IDProf', 'ch', 'credito', 'periodo', 'qat', 'qto', 'codTurma'], 'required'],
            [['IDCurso', 'IDProf', 'ch', 'credito', 'qat', 'qto', 'lab'], 'integer'],
            [['nome'], 'string', 'max' => 150, 'min' => 20],
            [['codigo'], 'string', 'max' => 7, 'min' => 6],
            [['periodo'], 'string', 'max' => 6, 'min' => 6],
            [['codTurma'], 'string', 'max' => 10, 'min' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'nome' => 'Nome da disciplina',
            'codigo' => 'Código',
            'IDCurso' => 'ID Curso',
            'IDProf' => 'ID Professor',
            'ch' => 'Carga Horária',
            'credito' => 'Crédito',
            'periodo' => 'Período',
            'qat' => 'QAT',
            'qto' => 'QTO',
            'codTurma' => 'Código da Turma',
            'lab' => 'Laboratório?'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Aluno::className(), ['IDDisc' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCurso()
    {
        return $this->hasOne(Curso::className(), ['ID' => 'IDCurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonitorias()
    {
        return $this->hasMany(Monitoria::className(), ['IDDisc' => 'ID']);
    }

    public function getProfessores()
    {
        return $this->hasMany(Monitoria::className(), ['IDProf' => 'ID']);
    }
}
