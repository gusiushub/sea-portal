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
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                $user = new User();
                 return $this->render('prof', ['user' => $user]);
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionPricing()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
            return $this->render('pricing');
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionStatistics()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
        return $this->render('statistics');
    }else{
$this->redirect(['index']);
}
}else {
    $this->redirect(['index']);
}
    }

    public function actionContracts()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
        $model = Contracts::find()->select('*')->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();


        return $this->render('contracts',['model'=>$model]);
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
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