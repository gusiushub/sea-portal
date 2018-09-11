<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class Ajax extends Model
{

    public $username;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
        ];
    }
    public function profileUpdate()
    {
//        if (!$this->validate()) {
//            return null;
//        }
//        //if (Yii::$app->request->isAjax){
//            $user = new User();
//            $user->username = $this->username;
//            return $user->save() ? $user : null;
//        //}

        $user = new User();
        $profile = json_decode($_POST['profile1'], true);
        $user->username = $profile['company'];
        $user->email = $profile['company'];
        $user->country = $profile['country'];
        $user->city = $profile['city'];
        $user->website = $profile['website'];
        $user->user_status = 2;
        //$user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}