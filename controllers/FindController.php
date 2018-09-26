<?php

namespace app\controllers;


use app\models\ContactForm;
use app\models\User;
use app\models\Vessel;
use app\models\VesselSale;
use Yii;
use yii\web\Controller;
use app\models\FindModel;
use app\models\FindCrew;
use app\models\FindStudent;
use app\models\Contracts;
use app\models\Cv;
use app\models\Statistics;

class FindController extends Controller
{
    public function actionShipboardSupply()
    {
        $model = new FindModel();
        if (isset($_POST['FindModel']['search'])){

            $freePlan = Contracts::find()->where(['like', 'search', $_POST['FindModel']['search']])->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])->andWhere(['like', 'maker', $_POST['FindModel']['maker']])->andWhere('plan = :plan',[':plan'=>'free'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();

            $businessPlan = Contracts::find()->where(['like', 'search', $_POST['FindModel']['search']])->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])->andWhere(['like', 'maker', $_POST['FindModel']['maker']])->andWhere('plan = :plan',[':plan'=>'buiznes'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();
            $businessAdvancedPlan = Contracts::find()->where(['like', 'search', $_POST['FindModel']['search']])->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])->andWhere(['like', 'maker', $_POST['FindModel']['maker']])->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])->andWhere('category = :category',[':category'=>'shipboard supply'])->all();

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

                $messages = [];

                $i=0;
                $cv=array();
                foreach ($_GET as $email) {
                    $cv[$i]=$_GET;
                }
                $count = count($_GET)-3;
                $k=0;
                foreach ($_GET as $mail){
                    $type = gettype($mail);
                    if ($type=='string' && $k<$count) {
                        $messages[] = Yii::$app->mailer->compose()
                            ->setTo($mail)
                            ->setSubject($_GET['FindCrew']['company'])
                            ->setTextBody($_GET['FindCrew']['body']);
                        Yii::$app->mailer->sendMultiple($messages);
                        $user = User::find()->select('id')->where(['email' => $mail])->one();
                        $statistics = Statistics::find()->where(['user_id'=>$user['id']])
                            ->andWhere(['date'=>date('Y.m.d')])->one();
                        if ($statistics['date']==date('Y.m.d')) {
                            $statistics->request = $statistics['request'] + 1;
                            $statistics->user_id = $user['id'];
                            $statistics->date = date('Y.m.d');
                            $statistics->save() ? $statistics : null;
                        }else{
                            $statisticsNew = new Statistics();
                            $statisticsNew->request = $statistics['request'] + 1;
                            $statisticsNew->user_id = $user['id'];
                            $statisticsNew->date = date('Y.m.d');
                            $statisticsNew->save() ? $statisticsNew : null;
                        }
                    }
                    $k++;
                }
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
        if (Yii::$app->request->isPost){

            $findVesselsPlus = Vessel::find()->where(['like', 'type', $_POST['VesselSale']['type']])
                ->andWhere(['like', 'vessel_option',$_POST['VesselSale']['vesOption']])
                ->andWhere(['like', 'flag', $_POST['VesselSale']['flag']])
                ->andWhere('category = :category',[':category'=>'vessel sale'])
                ->andWhere('plan = :plan',[':plan'=>'business'])
                ->all();

            $findVessels = Vessel::find()->where(['like', 'type', $_POST['VesselSale']['type']])
                ->andWhere(['like', 'vessel_option',$_POST['VesselSale']['vesOption']])
                ->andWhere(['like', 'flag', $_POST['VesselSale']['flag']])
                ->andWhere('category = :category',[':category'=>'vessel sale'])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->all();

            return $this->render('vesselsresult',['findVessels'=>$findVessels,'findVesselsPlus'=>$findVesselsPlus]);
        }
        $model = new VesselSale();
        return $this->render('vesselssale',['model'=>$model]);
    }

    public function actionChartering()
    {
        return $this->render('chartering');
    }

    public function actionAjaxCrew()
    {
        if (isset($_POST['position'])){
            $contracts = Crew::find()->where('position = :position', ['position' => $_POST['position']])->all();
            foreach ($contracts as $contract){
                if (!empty($contract['lvleng'])) {
                    echo '<option value="' . $contract['lvleng'] . '">' . $contract['lvleng'] . '</option>';
                }
            }
        }
    }


    public function actionAboutShip()
    {

        $user = User::findOne($_GET['id']);
        $ship = Vessel::find()->where('user_id=:user_id',[':user_id'=>$user['id']])->all();
        if (!empty($_GET['agree'])){
            if ($_GET['agree']=='yes'){
                Yii::$app->mailer->compose()
                    ->setFrom(Yii::$app->user->identity->email)
                    ->setTo($user['email'])
                    ->setSubject($_GET['company'])
                    ->setTextBody($_GET['message'])
                    ->send();
                $this->redirect('/web/find/about-ship?id='.$_GET['id']);
            }
        }
        //var_dump($ship);exit;
        return $this->render('ship',['ship'=>$ship,'user'=>$user]);
    }


    public function actionAjaxShipboarb()
    {
        if (isset($_POST['search'])){
            $contracts = Contracts::find()->where('search = :search', ['search' => $_POST['search']])->all();
            foreach ($contracts as $contract){
                echo '<option value="'.$contract['mechanism'].'">'.$contract['mechanism'].'</option>';
            }
        }

        if (isset($_POST['equipment'])){
            $contracts = Contracts::find()->where('mechanism = :equipment', ['equipment' => $_POST['equipment']])->all();
            foreach ($contracts as $contract){
                echo '<option value="'.$contract['maker'].'">'.$contract['maker'].'</option>';
            }
        }

    }

    public function actionAjaxStudent()
    {
        if (isset($_POST['faculty'])){
            $cvs = Cv::find()->select(['lvleng'])
                ->distinct()->where('faculty = :faculty', ['faculty' => $_POST['faculty']])->all();
            foreach($cvs as $cv){
                if (!empty($cv['lvleng'])) {
                    echo "<option  value='" . $cv['lvleng'] . "'>" . $cv['lvleng'] . "</option>";
                }
            }
        }

        if (isset($_POST['lvleng'])){
            $cvs = Cv::find()->select(['country'])
                ->distinct()->where('lvleng = :lvleng', ['lvleng' => $_POST['lvleng']])->all();
            foreach($cvs as $cv){
                if (!empty($cv['country'])) {
                    echo "<option value='" . $cv['country'] . "'>" . $cv['country'] . "</option>";
                }
            }
        }

        if (isset($_POST['country'])){
            $cvs = Cv::find()->where('country = :country', ['country' => $_POST['country']])->all();
            foreach($cvs as $cv){
                echo "<option value='".$cv['port']."'>".$cv['port']."</option>";
            }
        }

        if (isset($_POST['port'])){

        }
    }

    public function actionStudent()
    {
        $model = new FindStudent();
        if (isset($_GET['agree'])){
            if ($_GET['agree']=='yes'){

                $messages = [];

                $i=0;
                $cv=array();
                foreach ($_GET as $email) {
                    $cv[$i]=$_GET;
                }
                $count = count($_GET)-3;
                $k=0;
                foreach ($_GET as $mail){
                    $type = gettype($mail);
                    if ($type=='string' && $k<$count) {
                        $messages[] = Yii::$app->mailer->compose()
                            ->setTo($mail)
                            ->setSubject($_GET['FindStudent']['company'])
                            ->setTextBody($_GET['FindStudent']['body']);
                        Yii::$app->mailer->sendMultiple($messages);
                        $user = User::find()->select('id')->where(['email' => $mail])->one();
                        $statistics = Statistics::find()->where(['user_id'=>$user['id']])
                            ->andWhere(['date'=>date('Y.m.d')])->one();
                        if ($statistics['date']==date('Y.m.d')) {
                            $statistics->request = $statistics['request'] + 1;
                            $statistics->user_id = $user['id'];
                            $statistics->date = date('Y.m.d');
                            $statistics->save() ? $statistics : null;
                        }else{
                            $statisticsNew = new Statistics();
                            $statisticsNew->request = $statistics['request'] + 1;
                            $statisticsNew->user_id = $user['id'];
                            $statisticsNew->date = date('Y.m.d');
                            $statisticsNew->save() ? $statisticsNew : null;
                        }
                    }
                    $k++;
                }
                $this->redirect('/web/find/student');
            }
        }
        if ($model->load(Yii::$app->request->post())){
                return $this->render('studentresult', ['model'=>$model]);

        }

        return $this->render('student',['model'=>$model]);
    }

}