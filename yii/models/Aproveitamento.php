<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "aproveitamento".
 *
 * @property string $NumProcesso
 * @property integer $idAluno
 * @property string $nomeAluno
 * @property string $status
 * @property string $matriculaUFAM
 * @property string $cursoUFAM
 * @property integer $formaIngresso
 * @property string $disciplinaIES
 * @property string $codIES
 * @property integer $creditoIES
 * @property integer $horaIES
 * @property string $mediaIES
 * @property string $disciplinaUFAM
 * @property string $codUFAM
 * @property integer $creditoUFAM
 * @property integer $horaUFAM
 */
class Aproveitamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aproveitamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NumProcesso', 'nomeAluno', 'matriculaUFAM'], 'required'],
            [['idAluno', 'formaIngresso', 'creditoIES', 'horaIES', 'creditoUFAM', 'horaUFAM'], 'integer'],
            [['NumProcesso', 'nomeAluno'], 'string', 'max' => 150],
            [['status'], 'string', 'max' => 11],
            [['matriculaUFAM'], 'string', 'max' => 8],
            [['cursoUFAM', 'disciplinaIES'], 'string', 'max' => 120],
            [['codIES'], 'string', 'max' => 10],
            [['mediaIES'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NumProcesso' => 'Número do processo',
            //'idAluno' => 'Id Aluno',
            'nomeAluno' => 'Nome do Aluno',
            //'status' => 'Status',
            'matriculaUFAM' => 'Matrícula',  
            'cursoUFAM' => 'Curso (UFAM)',
            'formaIngresso' => 'Forma de Ingresso',
            'disciplinaIES' => 'Disciplina cursada na IES',
            'codIES' => 'Código da disciplina na IES',
            'creditoIES' => 'Crédito da disciplina na IES',
            'horaIES' => 'C.H. da disciplina na IES',
            'mediaIES' => 'Média conceito',
            'creditoUFAM' => 'Crédito da disciplina na UFAM',
            'horaUFAM' => 'C.H. da disciplina na UFAM',  
        ];
    }

    public function afterFind()
    { 
        //$this->nome = ucwords(strtolower($this->nome)); 
        //if ($this->formaIngresso=='0') $this->formaIngresso = 'Transferência Obrigatória'; 
        //else $this->sexo = 'Masculino'; 
        switch ($this->formaIngresso) {
             case 1: 
                 $this->formaIngresso = 'Transferência Obrigatória';
                 break;
             case 2: 
                 $this->formaIngresso = 'Transferência Facultativa';
                 break;
             case 3: 
                 $this->formaIngresso = 'Portador de Diploma';
                 break;
             case 4: 
                 $this->formaIngresso = 'Novo Vestibular';
                 break;
             case 5: 
                 $this->formaIngresso = 'Outros';
                 break;
        }
    } 
}
