<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\FindModel;
use app\models\Contracts;

class FindController extends Controller
{
    public function actionShipboardSupply()
    {
        $model = new FindModel();
        return $this->render('shipboardsupply',['model'=>$model]);
    }

    public function actionShipboardResult()
    {
    if (isset($_POST['search'])){

        $freePlan = Contracts::find()->where(['like', 'search', $_POST['search']])->andWhere(['like', 'mechanism',$_POST['equipment']])->andWhere(['like', 'maker', $_POST['maker']])->andWhere('plan = :plan',[':plan'=>'free'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();
        $businessPlan = Contracts::find()->where(['like', 'search', $_POST['search']])->andWhere(['like', 'mechanism',$_POST['equipment']])->andWhere(['like', 'maker', $_POST['maker']])->andWhere('plan = :plan',[':plan'=>'buiznes'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();
        $businessAdvancedPlan = Contracts::find()->where(['like', 'search', $_POST['search']])->andWhere(['like', 'mechanism',$_POST['equipment']])->andWhere(['like', 'maker', $_POST['maker']])->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();

        return $this->render('shipboardresult',['free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('shipboardresult');
    }

    public function actionPortServices()
    {
        $model = new FindModel();
        return $this->render('shipboardsupply',['model'=>$model]);
    }

    public function actionRepairs()
    {
        return $this->render('repairs');
    }

//    public function actionFindSupplier()
//    {
//        return $this->render('findsupplier');
//    }

    public function actionCrew()
    {
        return $this->render('crew');
    }

    public function actionVesselsSale()
    {
        return $this->render('vesselssale');
    }

    public function actionChartering()
    {
        return $this->render('chartering');
    }

    public function actionStudent()
    {
        return $this->render('student');
    }
}