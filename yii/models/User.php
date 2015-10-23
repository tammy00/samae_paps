<?php

namespace app\models;

class User extends \yii\db\ActiveRecord
{
    private $_id, $_username;

    public static function tableName()  // Adicionado
    {
        return 'usuario';
    }

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
}

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

    /** INCLUDE USER LOGIN VALIDATION FUNCTIONS**/
        /**
     * @inheritdoc
     */

/*
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }   */
    // Velho findIdentity  
    /* public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }  */

    // Adicionado
    /* public static function findIdentityByAccessToken($token, $type = null)
    {
          return static::findOne(['access_token' => $token]);
    }  */
/*
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }    */

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    /*public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    } */

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

        public function validatePassword($senha)
    {
        return $this->senha === md5($senha);
    }

    public static function findByUsername($login)
    {
        return static::findOne(['login' => $login]);
    }
}
