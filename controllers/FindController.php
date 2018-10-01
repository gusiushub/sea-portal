<?php

namespace app\controllers;


use app\models\Advertisement;
use app\models\ContactForm;
use app\models\Crew;
use app\models\Request;
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
        $place = Advertisement::find()->all();
        $model = new FindModel();
        if (isset($_POST['submit'])){

            $freePlan = Contracts::find()
                ->where( 'search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
//                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->andWhere('category = :category',[':category'=>'shipboard supply'])
                ->all();
            $businessPlan = Contracts::find()
                ->where('search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
                ->andWhere( 'maker=:maker', [':maker'=>$_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznes'])
                ->andWhere('category = :category',[':category'=>'shipboard supply'])
                ->all();
            $businessAdvancedPlan = Contracts::find()
                ->where(['like', 'search', $_POST['FindModel']['search']])
                ->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])
                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])
                ->andWhere('category = :category',[':category'=>'shipboard supply'])
                ->all();

            return $this->render('shipboardresult',['place'=>$place,'free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('shipboardsupply',['place'=>$place,'model'=>$model]);
    }


    public function actionPortServices()
    {
        $place = Advertisement::find()->all();
        $model = new FindModel();
        if (isset($_POST['submit'])){

            $freePlan = Contracts::find()
                ->where( 'search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
//                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->andWhere('category = :category',[':category'=>'port services'])
                ->all();
            //var_dump($freePlan);
            $businessPlan = Contracts::find()
                ->where('search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
                ->andWhere( 'maker=:maker', [':maker'=>$_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznes'])
                ->andWhere('category = :category',[':category'=>'port services'])
                ->all();
            $businessAdvancedPlan = Contracts::find()
                ->where(['like', 'search', $_POST['FindModel']['search']])
                ->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])
                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])
                ->andWhere('category = :category',[':category'=>'port services'])
                ->all();

            return $this->render('portservices',['place'=>$place,'free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('portservices',['place'=>$place,'model'=>$model]);
    }

    public function actionInspectionEquipment()
    {
        $place = Advertisement::find()->all();
        $model = new FindModel();
        if (isset($_POST['submit'])){

            $freePlan = Contracts::find()
                ->where( 'search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
//                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->andWhere('category = :category',[':category'=>'inspection of equipment'])
                ->all();
            $businessPlan = Contracts::find()
                ->where('search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
                ->andWhere( 'maker=:maker', [':maker'=>$_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznes'])
                ->andWhere('category = :category',[':category'=>'inspection of equipment'])
                ->all();
            $businessAdvancedPlan = Contracts::find()
                ->where(['like', 'search', $_POST['FindModel']['search']])
                ->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])
                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])
                ->andWhere('category = :category',[':category'=>'inspection of equipment'])
                ->all();

            return $this->render('inspection',['place'=>$place,'free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('inspection',['place'=>$place,'model'=>$model]);
    }

    public function actionCourses()
    {
        $place = Advertisement::find()->all();
        $model = new FindModel();
        if (isset($_POST['submit'])){

            $freePlan = Contracts::find()
                ->where( 'search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
//                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->andWhere('category = :category',[':category'=>'courses'])
                ->all();
            $businessPlan = Contracts::find()
                ->where('search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
                ->andWhere( 'maker=:maker', [':maker'=>$_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznes'])
                ->andWhere('category = :category',[':category'=>'courses'])
                ->all();
            $businessAdvancedPlan = Contracts::find()
                ->where(['like', 'search', $_POST['FindModel']['search']])
                ->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])
                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])
                ->andWhere('category = :category',[':category'=>'courses'])
                ->all();

            return $this->render('courses',['place'=>$place,'free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('courses',['place'=>$place,'model'=>$model]);
    }

    public function actionLegalServices()
    {
        $place = Advertisement::find()->all();
        $model = new FindModel();
        if (isset($_POST['submit'])){

            $freePlan = Contracts::find()
                ->where( 'search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
//                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->andWhere('category = :category',[':category'=>'legal services'])
                ->all();
            $businessPlan = Contracts::find()
                ->where('search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
                ->andWhere( 'maker=:maker', [':maker'=>$_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznes'])
                ->andWhere('category = :category',[':category'=>'legal services'])
                ->all();
            $businessAdvancedPlan = Contracts::find()
                ->where(['like', 'search', $_POST['FindModel']['search']])
                ->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])
                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])
                ->andWhere('category = :category',[':category'=>'legal services'])
                ->all();

            return $this->render('legal',['place'=>$place,'free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('legal',['place'=>$place,'model'=>$model]);
    }

    public function actionFisherySector()
    {
        $place = Advertisement::find()->all();
        $model = new FindModel();
        if (isset($_POST['submit'])){

            $freePlan = Contracts::find()
                ->where( 'search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
//                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->andWhere('category = :category',[':category'=>'fishery'])
                ->all();
            $businessPlan = Contracts::find()
                ->where('search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
                ->andWhere( 'maker=:maker', [':maker'=>$_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznes'])
                ->andWhere('category = :category',[':category'=>'fishery'])
                ->all();
            $businessAdvancedPlan = Contracts::find()
                ->where(['like', 'search', $_POST['FindModel']['search']])
                ->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])
                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])
                ->andWhere('category = :category',[':category'=>'fishery'])
                ->all();

            return $this->render('fishery',['place'=>$place,'free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('fishery',['place'=>$place,'model'=>$model]);
    }

    public function actionRepairs()
    {
        $place = Advertisement::find()->all();
        $model = new FindModel();
        if (isset($_POST['submit'])){

            $freePlan = Contracts::find()
                ->where( 'search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
//                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->andWhere('category = :category',[':category'=>'repairs'])
                ->all();
            $businessPlan = Contracts::find()
                ->where('search=:search',[':search'=> $_POST['FindModel']['search']])
                ->andWhere('mechanism=:mechanism',[':mechanism'=>$_POST['FindModel']['equipment']])
                ->andWhere( 'maker=:maker', [':maker'=>$_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznes'])
                ->andWhere('category = :category',[':category'=>'repairs'])
                ->all();
            $businessAdvancedPlan = Contracts::find()
                ->where(['like', 'search', $_POST['FindModel']['search']])
                ->andWhere(['like', 'mechanism',$_POST['FindModel']['equipment']])
                ->andWhere(['like', 'maker', $_POST['FindModel']['maker']])
                ->andWhere('plan = :plan',[':plan'=>'buiznesadvanced'])
                ->andWhere('category = :category',[':category'=>'repairs'])
                ->all();

            return $this->render('repairs',['place'=>$place,'free'=>$freePlan, 'business'=>$businessPlan,'businessAdvanced'=>$businessAdvancedPlan]);
        }
        return $this->render('repairs',['place'=>$place,'model'=>$model]);
    }


    public function actionCrew()
    {
        $place = Advertisement::find()->all();
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
                return $this->render('crewresult', ['place'=>$place,'model'=>$model,'mail'=>$mail]);
            }

        }
        return $this->render('crew',['place'=>$place,'model'=>$model]);
    }

    public function actionVesselsSale()
    {
        $place = Advertisement::find()->all();
        if (Yii::$app->request->isPost){

            $findVesselsPlus = Vessel::find()
                //->where(['between','price',$_POST['VesselSale']['priceFrom'],$_POST['VesselSale']['priceto']])
                ->where(['>', 'price', $_POST['priceFrom']])
                ->andWhere(['<','price' ,$_POST['priceTo'] ])
                ->where(['>', 'draft', $_POST['draftFrom']])
                ->andWhere(['<','draft' ,$_POST['draftTo'] ])
                ->where(['>', 'deadweight', $_POST['deadweightFrom']])
                ->andWhere(['<','deadweight' ,$_POST['deadweightTo'] ])
                ->where(['>', 'year', $_POST['yearFrom']])
                ->andWhere(['<','year' ,$_POST['yearTo'] ])
                ->where(['>', 'length', $_POST['leigthFrom']])
                ->andWhere(['<','length' ,$_POST['leigthTo'] ])
                //->where('price between '.$_POST['VesselSale']['priceFrom'].' and '.$_POST['VesselSale']['priceto'])
                ->andWhere('type=:type',[':type' => $_POST['VesselSale']['type']])
                ->andWhere('vessel_option=:vessel_option',[':vessel_option' => $_POST['VesselSale']['vesOption']])
                ->andWhere('flag=:flag',[':flag'=> $_POST['flag']])
                ->andWhere('category = :category',[':category'=>'vessel sale'])
                ->andWhere('plan = :plan',[':plan'=>'business'])
                ->all();

            $findVessels = Vessel::find()
            ->where(['>', 'price', $_POST['priceFrom']])
                ->andWhere(['<','price' ,$_POST['priceTo'] ])
                ->where(['>', 'draft', $_POST['draftFrom']])
                ->andWhere(['<','draft' ,$_POST['draftTo'] ])
                ->where(['>', 'deadweight', $_POST['deadweightFrom']])
                ->andWhere(['<','deadweight' ,$_POST['deadweightTo'] ])
                ->where(['>', 'year', $_POST['yearFrom']])
                ->andWhere(['<','year' ,$_POST['yearTo'] ])
                ->where(['>', 'length', $_POST['leigthFrom']])
                ->andWhere(['<','length' ,$_POST['leigthTo'] ])
                //->where('price between '.$_POST['VesselSale']['priceFrom'].' and '.$_POST['VesselSale']['priceto'])
                ->andWhere('type=:type',[':type' => $_POST['VesselSale']['type']])
                ->andWhere('vessel_option=:vessel_option',[':vessel_option' => $_POST['VesselSale']['vesOption']])
                ->andWhere('flag=:flag',[':flag'=> $_POST['flag']])
                ->andWhere('category = :category',[':category'=>'vessel sale'])
                ->andWhere('plan = :plan',[':plan'=>'free'])
                ->all();

            return $this->render('vesselsresult',['place'=>$place,'findVessels'=>$findVessels,'findVesselsPlus'=>$findVesselsPlus]);
        }
        $model = new VesselSale();
        return $this->render('vesselssale',['place'=>$place,'model'=>$model]);
    }

    public function actionChartering()
    {
        $model = new VesselSale();
        $place = Advertisement::find()->all();
        return $this->render('chartering',['place'=>$place,'model'=>$model]);
    }

    public function actionAjaxCrew()
    {
        if (isset($_POST['position'])){
            $contracts = Crew::find()
                ->where('position = :position', ['position' => $_POST['position']])
                ->all();
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
                $request = new Request();
                $request->user_id = $_GET['id'];
                $request->user_from = Yii::$app->user->id;
                $request->name = $_GET['name'];
                $request->date = date('Y/m/d');
                $request->email = $_GET['email'];
                $request->phone = $_GET['phone'];
                $request->company = $_GET['company'];
                $request->category = 'find a practice';
                $request->message = $_GET['message'];
                $request->save();
                $this->redirect('/web/find/about-ship?id='.$_GET['id']);
            }
        }
        return $this->render('ship',['ship'=>$ship,'user'=>$user]);
    }


    public function actionAjaxShipboarb()
    {
        if (isset($_POST['search'])){
            $contracts = Contracts::find()
                ->select(['mechanism'])
                ->distinct()
                ->where('search = :search', [':search' => $_POST['search']])
                ->all();
            foreach ($contracts as $contract){
                if (!empty($contract['mechanism'])) {
                    echo '<option value="' . $contract['mechanism'] . '">' . $contract['mechanism'] . '</option>';
                }
            }
        }
        if (isset($_POST['equipment'])){
            $contracts = Contracts::find()
                ->select(['maker'])
                ->distinct()
                ->where('equipment = :equipment', [':equipment' => $_POST['equipment']])
                ->all();

            foreach ($contracts as $contract){
                if (!empty($contract['maker'])) {
                    echo '<option value="'.$contract['maker'].'">'.$contract['maker'].'</option>';
                }
            }
        }

    }

    public function actionAjaxStudent()
    {
        if (isset($_POST['faculty'])){
            $cvs = Cv::find()
                ->select(['lvleng'])
                ->distinct()
                ->where('faculty = :faculty', ['faculty' => $_POST['faculty']])
                ->all();
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
        $place = Advertisement::find()->all();
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
                return $this->render('studentresult', ['place'=>$place,'model'=>$model]);

        }

        return $this->render('student',['place'=>$place,'model'=>$model]);
    }

}