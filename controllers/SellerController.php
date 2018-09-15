<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\web\Controller;

class SellerController extends Controller
{
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionProfile()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 3) {
                $user = new User();
                return $this->render('profile', ['user' => $user]);
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionVessel()
    {
        return $this->render('vessel');
    }

    public function actionOffers()
    {
        return $this->render('offers');
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