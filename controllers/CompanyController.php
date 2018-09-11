<?php

namespace app\controllers;



use app\models\User;
use Yii;
use yii\web\Controller;

class CompanyController extends Controller
{
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionProfile()
    {
        $user = new User();
        return $this->render('prof', ['user' => $user]);
    }

    public function actionPricing()
    {
        return $this->render('terms');
    }

    public function actionStatistics()
    {
        return $this->render('terms');
    }

    public function actionContracts()
    {
        return $this->render('contracts');
    }

    public function actionPlaceAdverticement()
    {
        return $this->render('terms');
    }

    public function actionIncomingRequests()
    {
        return $this->render('terms');
    }

    public function actionTermsConditions()
    {
        return $this->render('terms');
    }
}