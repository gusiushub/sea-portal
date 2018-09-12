<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class BecomeSupplier extends Model
{

    public $username;
    public $email;
    public $password;
    public $phone;
    public $country;
    public $city;
    public $website;
    public $user_status;

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
            ['country', 'required'],
            ['city', 'required'],
            ['phone', 'required'],
            ['website', 'required'],
            ['user_status', 'required'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'username'=>'',
            'country'=>'',
            'phone'=>'',
            'city'=>'',
            'email'=>'',
            'second_name'=>'',
            'password'=>'',
            'website'=>'',
            'user_status'=>'',
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
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->country = $this->country;
        $user->city = $this->city;
        $user->phone = $this->phone;
        $user->website = $this->website;
        $user->user_status = $this->user_status;
        return $user->save() ? $user : null;
    }

}