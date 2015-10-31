<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "monitoria".
 *
 * @property string $numProcesso
 * @property string $IDDisciplina
 * @property integer $Matricula
 * @property integer $IDProfessor
 * @property integer $Bolsista
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
            [['numProcesso', 'IDDisciplina', 'Matricula', 'IDProfessor', 'Bolsista'], 'required'],
            [['Matricula', 'IDProfessor', 'Bolsista'], 'integer'],
            [['numProcesso'], 'string', 'max' => 15],
            [['IDDisciplina'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'numProcesso' => 'Número de processo',
            'IDDisciplina' => 'ID da Disciplina',
            'Matricula' => 'Matrícula',
            'IDProfessor' => 'ID do Professor',
            'Bolsista' => 'Bolsista?',
        ];
    }

    
}
