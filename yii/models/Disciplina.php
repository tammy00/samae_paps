<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property integer $ID
 * @property integer $CodDisciplina
 * @property string $Nome
 * @property string $IDCurso
 * @property integer $CargaHoraria
 * @property integer $Credito
 * @property string $Periodo
 * @property integer $Laboratorio
 * @property integer $QTO
 * @property integer $QAT
 * @property string $CodTurma
 * @property integer $CodProfessor
 * @property integer $Monitoria
 */
class Disciplina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disciplina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodDisciplina', 'Nome', 'IDCurso', 'CargaHoraria', 'Credito', 'Periodo', 'Laboratorio', 'QTO', 'QAT', 'CodTurma', 'CodProfessor', 'Monitoria'], 'required'],
            [['CodDisciplina', 'CargaHoraria', 'Credito', 'Laboratorio', 'QTO', 'QAT', 'CodProfessor', 'Monitoria'], 'integer'],
            [['Nome'], 'string', 'max' => 120],
            [['IDCurso', 'Periodo'], 'string', 'max' => 6],
            [['CodTurma'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'CodDisciplina' => 'Cod Disciplina',
            'Nome' => 'Nome',
            'IDCurso' => 'Idcurso',
            'CargaHoraria' => 'Carga Horaria',
            'Credito' => 'Credito',
            'Periodo' => 'Periodo',
            'Laboratorio' => 'Laboratorio',
            'QTO' => 'Qto',
            'QAT' => 'Qat',
            'CodTurma' => 'Cod Turma',
            'CodProfessor' => 'Cod Professor',
            'Monitoria' => 'Monitoria',
        ];
    }
}
