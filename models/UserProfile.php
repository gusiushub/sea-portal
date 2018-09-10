<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class UserProfile extends Model
{

    public $username;


    public function profileUpdate()
    {
        if (Yii::$app->request->isPost){
            $user = new User();
            $user->username = $this->username;
            return $user->save() ? $user : null;
        }
    }
}