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
            [['CodDisciplina', 'Matricula', 'IDProfessor'], 'required'],
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
            'CodDisciplina' => 'Disciplina',
            'Matricula' => 'Matrícula',
            'IDProfessor' => 'Professor',
            'Bolsista' => 'Bolsista',
        ];
    }

   public function afterFind()
    { 
        switch ($this->IDProfessor) {
             case 1: 
                 $this->IDProfessor = 'ARILO CLÁUDIO DIAS NETO';
                 break;
             case 2: 
                 $this->IDProfessor = 'EDLENO SILVA DE MOURA';
                 break;
             case 3: 
                 $this->IDProfessor = 'CÉSAR AUGUSTO VIANA MELO';
                 break;
             case 4: 
                 $this->IDProfessor = 'EDSON NASCIMENTO SILVA JÚNIOR';
                 break;
        } 
        //$this->IDProfessor = $this->Nome;  
        /* switch ($this->Bolsista) 
        {
            case 1: 
                $this->Bolsista = 'Sim';
                break;
            case 0: 
                $this->Bolsista = 'Não';
                break;
        }  */  /*
        switch ($this->Laboratorio) 
        {
            case 1: 
                $this->Laboratorio = 'Sim';
                break;
            case 0: 
                $this->Laboratorio = 'Não';
                break;
        }  */
    }     
}
