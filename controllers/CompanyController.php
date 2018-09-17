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
        if (!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
            return $this->goHome();
        }else{
            return $this->goHome();
        }
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
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                $model = new DataSelection();
                return $this->render('addcontracts',['model' => $model]);
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionChoosePlan()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
        return $this->render('chooseplan');
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionPay()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
        return $this->render('pay');
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionPlaceAdverticement()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
        return $this->render('terms');
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }

    }

    public function actionIncomingRequests()
    {
        return $this->render('terms');
    }

    public function actionTermsConditions()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                return $this->render('terms');
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
            }
    }