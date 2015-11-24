<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professor".
 *
 * @property string $ID
 * @property string $Nome
 * @property string $Email
 * @property string $Telefone
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
            [['Nome', 'Email', 'Telefone'], 'required'],
            [['Telefone'], 'integer'],
            [['Nome'], 'string', 'max' => 120],
            [['Email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nome' => 'Nome do Professor',
            'Email' => 'E-mail',
            'Telefone' => 'Telefone',
        ];
    }
}
