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

    public function actionDynamiccities()
    {
        $data=Location::model()->findAll('parent_id=:parent_id',
            array(':parent_id'=>(int) $_POST['country_id']));

        $data=CHtml::listData($data,'id','name');
        foreach($data as $value=>$name)
        {
            echo CHtml::tag('option',
                array('value'=>$value),CHtml::encode($name),true);
        }
    }

    public function actionAjax()
    {
        echo 'asdasdasdasdasdasdasdasdasdasd';
    }
}