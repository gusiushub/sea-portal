<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
* Signup form
*/
class SignupForm extends Model
{

    public $username;
    public $email;
    public $password;
    public $country;
    public $city;
    public $second_name;
   // public $first_name;
    public $phone;

    /**
    * @inheritdoc
    */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['phone', 'required'],
            ['city', 'required'],
           // ['first_name', 'required'],
            ['second_name', 'required'],
            ['country', 'required'],
        ];
    }


    public function attributeLabels()
    {
    return [
    'verifyCode' => 'Verification Code',
    ];
    }

    /**
    * Signs user up.
    *
    * @return User|null the saved model or null if saving fails
    */
    public function signup()
    {

        if (!$this->validate()) {
        return null;
        }

            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->phone = $this->phone;
            $user->country = $this->country;
            $user->city = $this->city;
            $user->second_name = $this->second_name;
            //$user->first_name = $this->first_name;
            $user->user_status = 1;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            return $user->save() ? $user : null;
        }

}