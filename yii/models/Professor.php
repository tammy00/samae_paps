<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professor".
 *
 * @property string $IDProfessor
 * @property string $Nome
 * @property string $Email
 * @property string $Telefone
 * @property string $IDDisciplina
 */
class Professor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'professor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nome', 'Email', 'Telefone', 'IDDisciplina'], 'required'],
            [['Telefone'], 'integer'],
            [['Nome'], 'string', 'max' => 120],
            [['Email'], 'string', 'max' => 100],
            [['IDDisciplina'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDProfessor' => 'Idprofessor',
            'Nome' => 'Nome',
            'Email' => 'Email',
            'Telefone' => 'Telefone',
            'IDDisciplina' => 'Iddisciplina',
        ];
    }
}
