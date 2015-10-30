<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property string $Matricula
 * @property string $Nome
 * @property string $Disciplina
 * @property string $Curso
 * @property string $Email
 * @property integer $Monitor
 * @property integer $Bolsista
 * @property string $RG
 * @property string $CPF
 * @property string $Endereco
 * @property string $Telefone
 * @property string $Celular
 * @property string $Banco
 * @property string $Agencia
 * @property string $Conta
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
            [['Matricula', 'Nome', 'Disciplina', 'Curso', 'Email', 'Monitor', 'Bolsista', 'RG', 'CPF', 'Endereco', 'Telefone', 'Celular', 'Banco', 'Agencia', 'Conta'], 'required'],
            [['Matricula', 'Monitor', 'Bolsista', 'RG', 'CPF'], 'integer'],
            [['Endereco'], 'string'],
            [['Nome'], 'string', 'max' => 150],
            [['Disciplina', 'Curso'], 'string', 'max' => 6],
            [['Email'], 'string', 'max' => 50],
            [['Telefone'], 'string', 'max' => 8],
            [['Celular'], 'string', 'max' => 9],
            [['Banco'], 'string', 'max' => 15],
            [['Agencia'], 'string', 'max' => 30],
            [['Conta'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Matricula' => 'Matricula',
            'Nome' => 'Nome',
            'Disciplina' => 'Disciplina',
            'Curso' => 'Curso',
            'Email' => 'Email',
            'Monitor' => 'Monitor',
            'Bolsista' => 'Bolsista',
            'RG' => 'Rg',
            'CPF' => 'Cpf',
            'Endereco' => 'Endereco',
            'Telefone' => 'Telefone',
            'Celular' => 'Celular',
            'Banco' => 'Banco',
            'Agencia' => 'Agencia',
            'Conta' => 'Conta',
        ];
    }
}
