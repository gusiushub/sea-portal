<?php

namespace app\controllers;


use app\models\ContactForm;
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
        if (isset($_POST['FindModel']['search'])){

            $freePlan = Contracts::find()->where(['like', 'search', $_POST['FindModel']['search']])->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])->andWhere(['like', 'maker', $_POST['FindModel']['maker']])->andWhere('plan = :plan',[':plan'=>'free'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();

            $businessPlan = Contracts::find()->where(['like', 'search', $_POST['FindModel']['search']])->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])->andWhere(['like', 'maker', $_POST['FindModel']['maker']])->andWhere('plan = :plan',[':plan'=>'buiznes'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();
            $businessAdvancedPlan = Contracts::find()->where(['like', 'search', $_POST['FindModel']['search']])->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])->andWhere(['like', 'maker', $_POST['FindModel']['maker']])->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();
            //var_dump($freePlan);exit;
            return $this->render('shipboardresult',['free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('shipboardsupply',['model'=>$model]);
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


    public function actionCrew()
    {
        $model = new FindCrew();
        $mail = new ContactForm();

        if (isset($_GET['agree'])){
            if ($_GET['agree']=='yes'){
                $count = count($_GET)-3;
                for ($i=1; $i<$count+1; $i++) {
                    $cv[$i] = $_GET['cv'.$i];
                }
                $messages = [];
                foreach ($cv as $c) {
                    $messages[] = Yii::$app->mailer->compose()
                        // ...
                        ->setTo($c)
                        ->setSubject($_GET['FindCrew']['company'])
                        ->setTextBody($_GET['FindCrew']['body']);
                }
                 Yii::$app->mailer->sendMultiple($messages);
                $this->redirect('/web/find/crew');
            }
        }

        if ($model->load(Yii::$app->request->post())){
            if ($model->search()){
                return $this->render('crewresult', ['model'=>$model,'mail'=>$mail]);
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

}