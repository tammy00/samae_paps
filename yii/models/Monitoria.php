<?php

namespace app\models;

use Yii;
use app\models\PeriodoInscricaoMonitoria;

/**
 * This is the model class for table "monitoria".
 *
 * @property integer $ID
 * @property string $numProcs
 * @property integer $IDAluno
 * @property integer $IDDisc
 * @property integer $IDCurso
 * @property integer $bolsa
 *
 * @property DisciplinaPeriodo $disciplinaperiodo
 * @property Curso $curso
 * @property Aluno $aluno
 * @property PeriodoInscricaoMonitoria $periodoinscricao
 */
class Monitoria extends \yii\db\ActiveRecord
{

    public $file;
    public $nomeDisciplina;
    public $traducao_bolsa;
    public $traducao_status;

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
            [['numProcs', 'IDAluno', 'IDDisc', 'IDCurso', 'bolsa', 'status', 'IDperiodoinscr'], 'required'],
            [['IDAluno', 'IDDisc', 'IDCurso', 'bolsa', 'status', 'IDperiodoinscr'], 'integer'],
            [['numProcs'], 'string', 'max' => 150, 'min' => 7],
            [['file'], 'file', 'extensions' => 'pdf'],
            [['pathArqHistorico'], 'string', 'max' => 250],
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
            'IDAluno' => 'Aluno',
            'IDDisc' => 'Disciplina',
            'IDCurso' => 'Curso',
            'bolsa' => 'Bolsista',
            'file' => 'Histórico em PDF',
            'status' => 'Status',
            'IDperiodoinscr' => 'Ano/período',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinaperiodo()
    {
        return $this->hasOne(DisciplinaPeriodo::className(), ['id' => 'IDDisc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurso()
    {
        return $this->hasOne(Curso::className(), ['ID' => 'IDCurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAluno()
    {
        return $this->hasOne(Aluno::className(), ['ID' => 'IDAluno']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodoinscricao()
    {
        return $this->hasOne(PeriodoInscricaoMonitoria::className(), ['ID' => 'IDperiodoinscr']);
    }


    public function afterFind()
    {
        switch ($this->bolsa)
        {
            case 0:
                $this->traducao_bolsa = 'Não';
                break;
            case 1:
                $this->traducao_bolsa = 'Sim';
                break;
        }

        switch ($this->status)
        {
            case 0:
                $this->traducao_status = 'Aguardando Avaliação';
                break;
            case 1:
                $this->traducao_status = 'Deferido';
                break;
            case 2:
                $this->traducao_status = 'Indeferido';
                break;
        }
        
        $periodo = PeriodoInscricaoMonitoria::findOne(['ID' => $this->IDperiodoinscr]);
        $this->IDperiodoinscr = $periodo->ano.'/'.$periodo->periodo;

        $disciplinaPeriodo = DisciplinaPeriodo::findOne($this->IDDisc);
        $disciplina = Disciplina::find()->where(['id' => $disciplinaPeriodo->idDisciplina])->one();
        $this->nomeDisciplina = $disciplina->nomeDisciplina;

        //$info_periodo = PeriodoInscricaoMonitoria::find()->orderBy(['ID' => SORT_DESC])->one();  // Seleciona o último ID registrado na tabela
        //$this->IDperiodoinscr = $info_periodo->ano.'/'.$info_periodo->periodo;                  // String do ano/período para views

        //$nomedisc = Disciplina::find()->where(['id' => $this->IDDisc])->one();  // Substitui ID pelo nome da disciplina
        //$this->IDDisc = $nomedisc->nomeDisciplina;

        //$nomealuno = Aluno::find()->where(['ID' => $this->IDAluno])->one(); // Substitui ID pelo nome do aluno
        ///$this->IDAluno = $nomealuno->nome;

        //$nomecurso = Curso::find()->where(['ID' => $this->IDCurso])->one(); // Substitui ID pelo nome do aluno
        //$this->IDCurso = $nomecurso->nome;

        //switch ($this->bolsa)
        //{
        //    case 0:
        //        $this->bolsa = 'Não';
        //        break;
        //    case 1:
        //        $this->bolsa = 'Sim';
        //        break;
        //}
    }
}
