<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "monitoria".
 *
 * @property integer $ID
 * @property string $numProcs
 * @property integer $IDAluno
 * @property integer $IDDisc
 * @property integer $IDCurso
 * @property integer $bolsa
 *
 * @property Disciplina $iDDisc
 * @property Curso $iDCurso
 * @property Aluno $iDAluno
 */
class Monitoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'monitoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numProcs', 'IDAluno', 'IDDisc', 'IDCurso', 'bolsa'], 'required'],
            [['IDAluno', 'IDDisc', 'IDCurso', 'bolsa'], 'integer'],
            [['numProcs'], 'string', 'max' => 150, 'min' => 7]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'numProcs' => 'Nº Processo',
            'IDAluno' => 'ID Aluno',
            'IDDisc' => 'ID Disciplina',
            'IDCurso' => 'ID Curso',
            'bolsa' => 'Bolsa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDDisc()
    {
        return $this->hasOne(Disciplina::className(), ['ID' => 'IDDisc']);
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
    public function getIDAluno()
    {
        return $this->hasOne(Aluno::className(), ['matricula' => 'IDAluno']);
    }


    public function afterFind()
    {
        switch ($this->Bolsista)
        {
            case 0:
                $this->Bolsista = 'Não';
                break;
            case 1:
                $this->Bolsista = 'Sim';
                break;
        }
    }
    
    
}
