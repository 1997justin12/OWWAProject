<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public $authKey;

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;


    public static function tableName(){
        return 'user';
    } 

    public static function findIdentity($id)
    {
         $user = User::find()
            ->where(['id' => $id])
            ->one();

        return isset($user) ? new static($user) : null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

        return null;
    }


    public static function findByUsername($username)
    {
        $user = User::find()
            ->where(['username' => $username])
            ->one();

            if(count($user)){
                return new static($user);
            }
        

        return null;
    }

    public function getDetails($id)
    {
        $user = User::find()
            ->where(['id' => $id])
            ->one();

            return $user;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLast()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
