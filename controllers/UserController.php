<?php

namespace app\controllers;



use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionProfile()
    {
        $user_status = Yii::$app->user->identity->user_status;
        if ($user_status==1) {
            return $this->redirect('/web/site/profile');
        }
        if ($user_status==2) {
            return $this->redirect('/web/company/profile');
        }
        if ($user_status==3) {
            return $this->redirect('/web/seller/profile');
        }
    }
}