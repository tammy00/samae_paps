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
            [['numProcesso', 'CodDisciplina', 'Matricula', 'IDProfessor', 'Bolsista'], 'required'],
            [['Matricula', 'IDProfessor', 'Bolsista'], 'integer'],
            [['numProcesso'], 'string', 'max' => 15],
            [['CodDisciplina'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'numProcesso' => 'Número de processo',
            'CodDisciplina' => 'ID da Disciplina',
            'Matricula' => 'Matrícula',
            'IDProfessor' => 'ID do Professor',
            'Bolsista' => 'Bolsas em Monitoria para a(s) disciplina(s) correspondente(s)',
        ];
    }

    
}
