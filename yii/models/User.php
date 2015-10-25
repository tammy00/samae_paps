<?php

namespace app\models;
use yii\base\Model;
use yii\web\IdentityInterface;


class User extends \yii\db\ActiveRecord
{
    private $_id, $_username;

    public static function tableName()  // Adicionado
    {
        return 'usuario';
    }
/*
public function authenticate() 
{
    $record = User::model()->findByAttributes(array('login'=>$this->username)); 
    if($record === null)
    {
        $this->errorCode = self::ERROR_USERNAME_INVALID; 
    } 
    elseif ($record->senha !== $this->password)
    { 
        $this->errorCode = self::ERROR_PASSWORD_INVALID; 
    } 
    else 
    { 
        $this->_id=$record->id; 
        $this->username=$record->usuario; 
        $this->setState('nome', $record->nome); 
        $this->errorCode=self::ERROR_NONE; 
    } 
    return !$this->errorCode; 
}  */

    public function rules()
    {
        return [
            [['login'], 'required', 'string', 'max' => 20],
            [['senha'], 'required', 'string', 'max' => 128]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'senha' => 'Senha'
        ];
    }   

    public function getId()
    {
        return $this->id;
    }

    public function validatePassword($senha)
    {
        $record = static::findOne($senha); 
        if( $record === null ){
            return 1;//$this->senha === md5($senha);
        }
        else return 0;
    }

    public static function findByUsername($login)
    {
        return static::findOne(['login' => $login]);
    }

}
