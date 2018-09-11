<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\DataSelection;
use app\models\Contracts;

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
        $model = Contracts::find()->select('*')->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();


        return $this->render('contracts',['model'=>$model]);
    }

    public function actionAddContracts()
    {
        $model = new DataSelection();
        return $this->render('addcontracts',['model' => $model]);
    }

    public function actionChoosePlan()
    {
        return $this->render('chooseplan');
    }

    public function actionPay()
    {
        return $this->render('pay');
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