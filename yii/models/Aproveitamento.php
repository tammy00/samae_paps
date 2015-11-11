<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aproveitamento".
 *
 * @property integer $ID
 * @property string $numProcs
 * @property integer $IDAluno
 * @property string $status
 * @property integer $IDCurso
 * @property integer $formaIngreso
 * @property integer $discIES
 * @property integer $codIES
 * @property integer $credIES
 * @property integer $chIES
 * @property integer $mediaIES
 * @property integer $codUFAM
 * @property integer $chUFAM
 * @property integer $credUFAM
 *
 * @property Curso $iDCurso
 * @property Aluno $iDAluno
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
            [['numProcs', 'IDAluno', 'IDCurso', 'formaIngreso', 'discIES', 'codIES', 'credIES', 'chIES', 'mediaIES', 'codUFAM', 'chUFAM', 'credUFAM'], 'required'],
            [['IDAluno', 'IDCurso', 'formaIngreso', 'discIES', 'codIES', 'credIES', 'chIES', 'mediaIES', 'codUFAM', 'chUFAM', 'credUFAM'], 'integer'],
            [['numProcs'], 'string', 'min' => 6, 'max' => 6],
            [['status'], 'string', 'min' => 8, 'max' => 10]
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
            'status' => 'Status do processo',
            'IDCurso' => 'ID Curso',
            'formaIngreso' => 'Forma de Ingreso',
            'discIES' => 'Nome da disc. no IES',
            'codIES' => 'Código da disc. no IES',
            'credIES' => 'Crédito da disc. no IES',
            'chIES' => 'Carga Horária da disc. no IES',
            'mediaIES' => 'Média da disc. no IES',
            'codUFAM' => 'Código da disc. na UFAM',
            'chUFAM' => 'Carga Horária da disc. na UFAM',
            'credUFAM' => 'Crédito da disc. na UFAM',
        ];
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
        return $this->hasOne(Aluno::className(), ['ID' => 'IDAluno']);
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
