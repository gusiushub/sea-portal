<?php

namespace app\controllers;



use Yii;
//use yii\bootstrap\Html;
use yii\web\Controller;

class UserController extends Controller
{


    public function actionIndex()
    {
        $Ipjax = Yii::$app->request->get('id') ?: null;
        return $this->render('index', ['Ipjax' => $Ipjax]);
    }

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


    public function actionLocation()
    {

        //$ajax = json_decode($_POST['id'], true);
       echo 'asdasdasd' ;
       echo $_POST['val'];
        //if (isset($_POST['country'])){
        //echo $_POST;
        //return $_POST['id'];
//            $region = \app\models\Location::find()->where(['parent_id'=>$_POST['id']])->all();
//            foreach ($region as $reg) {
//                $city = \app\models\Location::find()->where(['parent_id' => $reg['parent_id']])->all();
//
//
//                foreach ($city as $post) {
//                    echo "<option value='" . $post['name'] . "'>" . $post['name'] . "</option>";
//                }
//            }
//return $city;
        // }


    }

//    public function actionAjax()
//    {
//        $data = array('id'=>2);
//        $data=Html::listData($data,'id','name');
//        echo 'asdasdasdasdasdasdasdasdasdasd';
//    }
}