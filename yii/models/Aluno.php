<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $ID
 * @property integer $matricula
 * @property string $nome
 * @property string $email
 * @property integer $RG
 * @property integer $CPF
 * @property string $endereco
 * @property string $bairro
 * @property string $telResid
 * @property string $telCel
 * @property string $telComerc
 * @property integer $IDCurso
 * @property integer $IDDisc
 * @property string $banco
 * @property string $agencia
 * @property string $conta
 * @property integer $monitor
 *
 * @property Curso $iDCurso
 * @property Disciplina $iDDisc
 * @property Aproveitamento[] $aproveitamentos
 * @property Monitoria[] $monitorias
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'nome', 'email', 'RG', 'CPF', 'IDCurso'], 'required', 'message' => 'Este campo é obrigatório.'],
            [['matricula', 'RG', 'CPF', 'IDCurso', 'IDDisc', 'monitor'], 'integer'],
            [['endereco'], 'string'],
            [['nome'], 'string', 'max' => 250],
            [['email'], 'string', 'min' => 10, 'max' => 50],
            [['bairro'], 'string', 'max' => 100, 'min' => 4],
            [['telResid', 'telCel', 'telComerc'], 'string', 'max' => 15, 'min' => 8],
            [['banco', 'agencia', 'conta'], 'string', 'max' => 150, 'min' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'matricula' => 'Matrícula',
            'nome' => 'Nome',
            'email' => 'E-mail',
            'RG' => 'RG',
            'CPF' => 'CPF',
            'endereco' => 'Endereço',
            'bairro' => 'Bairro',
            'telResid' => 'Telefone (residência)',
            'telCel' => 'Telefone (celular)',
            'telComerc' => 'Telefone (comercial)',
            'IDCurso' => 'Curso',
            'IDDisc' => 'Monitoria na disciplina',
            'banco' => 'Banco',
            'agencia' => 'Agência',
            'conta' => 'Conta',
            'monitor' => 'Monitor?',
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
    public function getIDDisc()
    {
        return $this->hasOne(Disciplina::className(), ['ID' => 'IDDisc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAproveitamentos()
    {
        return $this->hasMany(Aproveitamento::className(), ['IDAluno' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonitorias()
    {
        return $this->hasMany(Monitoria::className(), ['IDAluno' => 'matricula']);
    }

    public function afterFind()
    { 
        //$this->nome = ucwords(strtolower($this->nome)); 
        //if ($this->formaIngresso=='0') $this->formaIngresso = 'Transferência Obrigatória'; 
        //else $this->sexo = 'Masculino'; 
        switch ($this->IDCurso) {
             case 1: 
                 $this->IDCurso = 'Ciências da Computação';
                 break;
             case 2: 
                 $this->IDCurso = 'Sistemas de Informação';
                 break;
             case 3: 
                 $this->IDCurso = 'Engenharia da Computação';
                 break;
        }
    } 


}
