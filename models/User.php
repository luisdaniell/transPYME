<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{

    public $usu_email;
    public $usu_contraseña;
    public $usu_access_token;
    public $usu_tipo;
    public $usu_vigente;
    public $usu_rut;
    public $usu_nombres;
    public $usu_apell_paterno;
    public $usu_apell_materno;
    public $usu_telefono;
    public $rol_codigo;
    public $emp_rut;
    public $authKey;




    

    /**
     * @inheritdoc
     */
    public static function findIdentity($usu_email)
    {
        $users = Usuario::find()
        ->where(["usu_vigente" => 1])
        ->andWhere(["usu_email" => $usu_email])
        ->all();

        foreach ($users as $user) {
            return new static($user); } 

    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    { 
        $users = Usuario::find()
                 ->where("usu_vigente=:usu_vigente", [":usu_vigente" => 1])
                 ->andWhere("usu_access_token=:usu_access_token", [":=usu_acces_token" => $token])
                 ->all();

        foreach ($users as $user) {
            if ($user->accessToken === $token){
                return new static($user);
            }
        }
         return null;

    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($usu_email)
    {
        $users = Usuario::find()
        ->where(["usu_vigente" => 1])
        ->andWhere(["usu_email" => $usu_email])
        ->all();

        foreach ($users as $user) {
            return new static($user); }       
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->usu_email;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($usu_contraseña)
    {
        return $this->usu_contraseña === $usu_contraseña;
    }
}
