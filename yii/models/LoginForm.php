<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */

/**
 * Tammy
 */

class LoginForm extends Model
{
    public $login;
    public $senha;
    public $lembrar = true;
    public $esqueciSenha = true;

    private $_user = false; 
    private $_word = false; 

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['senha', 'login'], 'required', 'message' => 'Este campo é obrigatório.'],
            // rememberMe must be a boolean value
            ['lembrar', 'boolean'],
            //['login', 'validateUsername']
            // password is validated by validatePassword()
            ['senha', 'validatePassword'],
            ['senha', 'match', 'pattern'=>'/^[a-z0-9_-] {6,20}$/'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) 
        {
            $user = $this->getUser();
            if ( $user === false ) 
            {
                $this->addError($attribute, 'Usuário incorreto!');
            }
            else{
                $word = $this->getWord();
                if ( $word === false ) $this->addError($attribute, 'Senha incorreta!');
            } 
        }
        //else $this->addError($attribute, 'Os campos devem ser preenchidos!');   
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Usuario::findByUsername($this->login); 
        }

        return $this->_user;
    }

    public function getWord()
    {
        if ($this->_word === false) {
            $this->_word = Usuario::findBySenha($this->senha); 
        }

        return $this->_word;
    }

    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->lembrar ? 3600*24*30 : 0);
        }
        return false;
    }
}
