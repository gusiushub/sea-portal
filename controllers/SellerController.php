<?php

namespace app\controllers;

use app\models\User;
use app\models\Vessel;
use app\models\UploadImage;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class SellerController extends Controller
{
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionProfile()
    {
        $user = new User();
        $upload = new UploadImage();
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 3) {
                if(Yii::$app->request->isPost){
                $file = UploadedFile::getInstance($upload, 'image');
                if ($upload->uploadFile($file,Yii::$app->user->identity->img)){
                    return $this->redirect('/web/seller/profile');
                }
                    return $this->render('profile', ['user' => $user,'upload'=>$upload]);
                }
                $user = new User();
                return $this->render('profile', ['user' => $user,'upload'=>$upload]);
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionVessel()
    {
        $vessel = Vessel::find()->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->one();
        return $this->render('vessel',['vessel'=>$vessel]);
    }

    public function actionOffers()
    {
        $userOffers = Vessel::find()->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();
        return $this->render('offers',['userOffers'=>$userOffers]);
    }

    public function actionPricing()
    {
        return $this->render('pricing');
    }

    public function actionStatistics()
    {
        return $this->render('statistics');
    }
    public function actionTerm()
    {
        return $this->render('term');
    }

    public function actionRequest()
    {
        return $this->render('request');
    }

}