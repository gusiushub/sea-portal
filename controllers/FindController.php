<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\FindModel;
use app\models\FindCrew;
use app\models\FindStudent;
use app\models\Contracts;
use app\models\Cv;

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
        return $this->render('portservices',['model'=>$model]);
    }

    public function actionInspectionEquipment()
    {
        return $this->render('inspection');
    }

    public function actionCourses()
    {
        return $this->render('courses');
    }

    public function actionLegalServices()
    {
        return $this->render('legal');
    }

    public function actionFisherySector()
    {
        return $this->render('fishery');
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
        $model = new FindCrew();
        if ($model->load(Yii::$app->request->post())){
            if ($model->search()){
                return $this->render('crewresult', ['model'=>$model->search()]);
            }

        }
        return $this->render('crew',['model'=>$model]);
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
        $model = new FindStudent();
        if ($model->load(Yii::$app->request->post())){
            if ($model->search()){
                return $this->render('studentresult', ['model'=>$model->search()]);
            }
        }
        return $this->render('student',['model'=>$model]);
    }

//    public function actionCrewResult()
//    {
//var_dump($_POST);exit;
//        if (isset($_POST['search'])){
//            $businessAdvancedPlan = Cv::find()->where(['like', 'position', $_POST['position']])
//                ->andWhere(['like', 'lvleng',$_POST['lvleng']])
//                ->andWhere(['like', 'currency', $_POST['currency']])
//                ->andWhere('category = :category',[':category'=>'find a job'])
//                ->andWhere(['>=','salary_from', $_POST['maximum']])
//                ->all();
//
//            var_dump($businessAdvancedPlan);
//        }
//        return $this->render('crewresult', ['model'=>$businessAdvancedPlan]);
//    }
}