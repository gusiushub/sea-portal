<?php

namespace app\controllers;

use Yii;
use yii\bootstrap\Html;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Statistics;
use app\models\SignupForm;
use app\models\UserProfile;
use app\models\BecomeSupplier;
use app\models\UploadImage;
use app\models\Location;
use app\models\Ajax;
use app\models\Cv;
use app\models\CvForm;
use app\models\Vessel;
use yii\web\UploadedFile;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionSelectAjax()
    {
        $regions = Location::find()->where(['parent_id'=>$_POST['id_country']])->all();
        $city = [];
        foreach ($regions as $region) {
            $city = Location::find()->where(['parent_id' => $region['location_id']])->all();
        }
        echo '<select size="1" name="region" >';
        foreach ($city as $numRow) {
            echo '<option value="' . $numRow['name'] . '">' . $numRow['name'] . '</option>';
        };
        echo '</select>';
    }

//    public function actionStudentAjax()
//    {
//        if (isset($_POST['val'])) {
//            $posts = \app\models\Cv::find()
//                ->where(['faculty' => $_POST['val']])
//                ->all();
//
//                foreach($posts as $post){
//                    echo "<option value='".$post->lvleng."'>".$post->lvleng."</option>";
//                }
//        }
//        if (isset($_POST['pole2'])) {
//
//            $posts = \app\models\Cv::find()
//                ->where(['lvleng' => $_POST['pole2']])
//                ->all();
//
//            foreach($posts as $post){
//                echo "<option value='".$post->country."'>".$post->country."</option>";
//            }
//        }
//
//        if (isset($_POST['country'])) {
//
//            $posts = \app\models\Cv::find()
//                ->where(['lvleng' => $_POST['pp']])
//                ->all();
//
//            foreach($posts as $post){
//                echo "<option value='".$post->port."'>".$post->port."</option>";
//            }
//        }
//    }




//зависимые селекты для формы поиска 
    public function actionSubcat() {
        if (isset($_POST['val'])){
            $posts = \app\models\Contracts::find()
                ->where(['search' => $_POST['val']])
                ->orderBy('id DESC')
                ->all();

            $countPosts = 4;
            if($countPosts>0){
                foreach($posts as $post){
                    echo "<option value='".$post->mechanism."'>".$post->mechanism."</option>";
                }
            }

        }
        if (isset($_POST['pole2'])){
            $posts = \app\models\Contracts::find()
                ->where(['mechanism' => $_POST['pole2']])
                ->all();
            $countPosts = 4;
            if($countPosts>0){
                foreach($posts as $post){
                    echo "<option value='".$post->maker."'>".$post->maker."</option>";
                }
            }
        }
        }


        public function actionSellerajaxform()
        {
            $date = date('Y/m/d',strtotime(date('Y-m-d').' +1 year'));
            if (isset($_POST['profile_seller7'])){
                $ajax = json_decode($_POST['profile_seller7'], true);
                $vessels = new Vessel();
                $vessels->category = $ajax['category'];
                $vessels->type = $ajax['vtype'];
                $vessels->option_type = $ajax['option'];
                $vessels->length = $ajax['length'];
                $vessels->draft = $ajax['draft'];
                $vessels->deadweight = $ajax['dweight'];
                $vessels->year = $ajax['year'];
                $vessels->country = $ajax['country'];
                $vessels->port = $ajax['port'];
                $vessels->date = date('Y/m/d');
                $vessels->date_expire = $date;
                $vessels->user_id = Yii::$app->user->id;
               $vessels->price = $ajax['price'];
//                $vessels->currency = $ajax['currency'];
//            $vessels->flag = $ajax['flag'];
                return $vessels->save();
            }
        }

    public function actionSellerAjax()
    {
        if (isset($_POST['change'])){
            $id = Yii::$app->user->identity->id;
            $model = User::find()->where(['id' => $id])->one();
            $password = $str = str_replace('"', "", $_POST['change']);
            //$model->password_hash = $password;
            $model->setPassword($password);
            $model->generateAuthKey();
            $model->save();
        }

        if (isset($_POST['profile_seller1'])){
            $profile = json_decode($_POST['profile_seller1'], true);
            $id = Yii::$app->user->identity->id;
            $model = User::find()->where(['id' => $id])->one();
            $model->username = $profile['company'];
            $model->contacts = $profile['contacts'];
            $model->email = $profile['email'];
            $model->country = $profile['country'];
            $model->phone = $profile['phone'];
            $model->city = $profile['city'];
            $model->save();
        }


    }

    public function actionShipAjax()
    {
        if (isset($_POST['profile_seller1'])){
            $profile = json_decode($_POST['profile_seller1'], true);
            $id = Yii::$app->user->identity->id;
            $model = Vessel::find()->where(['user_id' => $id])->one();
            $model->vessel_option = $profile['option'];
            $model->type = $profile['vtype'];
            $model->option_type = $profile['ovtype'];
            $model->length = $profile['length'];
            $model->draft = $profile['draft'];
            $model->deadweight = $profile['deadweight'];
            $model->year = $profile['year'];
            $model->flag = $profile['flag'];
            $model->country = $profile['country'];
            $model->port = $profile['port'];
            $model->price = $profile['price'];
            $model->information = $profile['message'];
            $model->save();
        }
    }

    public function actionCvAjax()
    {
        $date = date('Y/m/d',strtotime(date('Y-m-d').' +1 month'));
        if (isset($_POST['profile_personal4_1'])){
            $ajax = json_decode($_POST['profile_personal4_1'], true);
            if ($ajax['country']!="" && $ajax['faculty']!="" && $ajax['levelofeng'] && $ajax['category'] && $ajax['port']) {
               // $statistics = new Statistics();
                $cv = new Cv();
                $cv->user_id = Yii::$app->user->identity->id;
                $cv->date = date('Y/m/d');
                $cv->date_expiry = $date;
                $cv->category = $ajax['category'];
                $cv->faculty = $ajax['faculty'];
                $cv->lvleng = $ajax['levelofeng'];
                $cv->country = $ajax['country'];
                $cv->port = $ajax['port'];
                $cv->name = $ajax['name'];
                $cv->plan = 'free';
                $cv->status = 'paid';
//                $user_statistics = Statistics::find()->where(['user_id'=>Yii::$app->user->id])->all();
//                if ($statistics->date!=date('Y.m.d')){
//
//                }
                //$user = User::find()->select('id')->where(['email' => $mail])->one();
//                $statistics = Statistics::find()->where(['user_id'=>Yii::$app->user->id])
//                    ->andWhere(['date'=>date('Y.m.d')])->one();
//                if ($statistics['date']==date('Y.m.d')) {
//                    $statistics->request = $statistics['request'] + 1;
//                    $statistics->user_id = Yii::$app->user->id;
//                    $statistics->date = date('Y.m.d');
//                    $statistics->save() ? $statistics : null;
//                }else{
//                    $statisticsNew = new Statistics();
//                    $statisticsNew->request = $statistics['request'] + 1;
//                    $statisticsNew->user_id = Yii::$app->user->id;
//                    $statisticsNew->date = date('Y.m.d');
//                    $statisticsNew->save() ? $statisticsNew : null;
//                }

                return $cv->save();
            }
        }

        if (isset($_POST['profile_personal4_1_job'])){
            $ajax = json_decode($_POST['profile_personal4_1_job'], true);
            if ($ajax['salary_min']!="" && $ajax['salary_max'] && $ajax['currency'] && $ajax['position']){
                $cv = new Cv();
                $cv->user_id = Yii::$app->user->identity->id;
                $cv->date = date('Y/m/d');
                $cv->date_expiry = $date;
                $cv->category = $ajax['category'];
                $cv->salary_to = $ajax['salary_min'];
                $cv->salary_from = $ajax['salary_max'];
                $cv->lvleng = $ajax['levelofeng'];
                $cv->currency = $ajax['currency'];
                $cv->position = $ajax['position'];
                $cv->plan = 'free';
                $cv->status = 'paid';

                return $cv->save();
            }
        }
    }


    public function actionAjax()
    {
        if (isset($_POST['change']) && $_POST['change']!='password'){
            $id = Yii::$app->user->identity->id;
            $model = User::find()->where(['id' => $id])->one();
            $password = $str = str_replace('"', "", $_POST['change']);
            //$model->password_hash = $password;
            $model->setPassword($password);
            $model->generateAuthKey();
            $model->save();
        }

        if (isset($_POST['profile_personal1'])){
            $profile = json_decode($_POST['profile_personal1'], true);
            $id = Yii::$app->user->identity->id;
            $model = User::find()->where(['id' => $id])->one();
            $model->username = $profile['fname'];
            $model->second_name = $profile['sname'];
            $model->birthday = $profile['dbirth'];
            $model->country = $profile['country'];
            $model->city = $profile['city'];
            $model->experience = $profile['experience'];
            $model->salary = $profile['salary'];
            $model->currency = $profile['currency'];
            $model->save();
        }

        if (isset($_POST['change'])) {
            //$profile = json_decode($_POST['change'], true);
            $id = Yii::$app->user->identity->id;
            $model = User::find()->where(['id' => $id])->one();
            $model->phone = $_POST['change'];
            $model->save();
        }
        if (isset($_POST['profile1'])){
            $profile = json_decode($_POST['profile1'], true);
            $id = Yii::$app->user->identity->id;
            $model = User::find()->where(['id' => $id])->one();
            $model->username = $profile['company'];
            $model->phone = $profile['phone'];
            $model->country = $profile['country'];
            $model->city = $profile['city'];
            $model->website = $profile['website'];
            $model->email = $profile['email'];
            $model->contacts = $profile['contacts'];
            $model->save();
        }

        if (isset($_POST['profile_personal1'])){
            $profile = json_decode($_POST['profile_personal1'], true);
            $id = Yii::$app->user->identity->id;
            $model = User::find()->where(['id' => $id])->one();
            $model->username = $profile['fname'];
            $model->second_name = $profile['sname'];
            $model->country = $profile['country'];
            $model->city = $profile['city'];
            $model->save();
        }

    }



    public function actionCvJob()
    {
        $userCv = Cv::find()->select('*')->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();

        return $this->render('cvjob',['userCv'=>$userCv]);
    }

    public function actionProfile()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 1) {
                $upload = new UploadImage();
                $model = new User();
                if(Yii::$app->request->isPost){
                    $file = UploadedFile::getInstance($upload, 'image');
                    if ($upload->uploadFile($file,Yii::$app->user->identity->img)){
                        return $this->redirect('/web/site/profile');
                    }
                    return $this->render('profile', ['model' => $model,'upload'=>$upload]);
                }
                return $this->render('profile', ['model' => $model,'upload'=>$upload]);
            }else{
                $this->redirect(['index']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionPricing()
    {
        $cv = Cv::find()->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();

        if (!Yii::$app->user->isGuest ){
            if (!empty($cv)) {
                return $this->render('pricing',['cv'=>$cv]);
            }else{
               return $this->redirect(['profile']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionCv()
    {
        if (!Yii::$app->user->isGuest){

            $userCv = Cv::find()->select('*')->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();
            $model = new CvForm();
            return $this->render('cv',['userCv'=>$userCv,'model'=>$model]);
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionTerms()
    {
        if (!Yii::$app->user->isGuest){
            return $this->render('terms');
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionStatistics()
    {
        if (!Yii::$app->user->isGuest){
            $cv = Cv::find()->select('*')->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();
            if (!empty($cv)) {
                $statistics = Statistics::find()->orderBy('id DESC')->limit(7)->where(['user_id'=>Yii::$app->user->id])
                    ->all();
                //var_dump($statistics[0]['date']);
                for ($i=0;$i<7;$i++){
                    if (isset($statistics[$i]['date'])){
                        $get[$i]=$statistics[$i]['date'];
                    }else{
                        $get[$i]='';
                    }
                }

                //var_dump($statistics);
                if (empty($statistics)){

                    $statistica = new Statistics();
                    $statistica->user_id = Yii::$app->user->id;
                    $statistica->request = 0;
                    $statistica->visit = 0;
                    $statistica->date = date('Y.m.d');
                    $statistica->save();
                }
                //var_dump('asdasdasd');exit;
                return $this->render('statistics',['statistics'=>$statistics]);
            }else{
                    return $this->redirect(['profile']);
            }
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionBecomeSupplier()
    {
        $model = new BecomeSupplier();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    $user_status = Yii::$app->user->identity->user_status;
                    if ($user_status==1) {
                        return $this->redirect(['profile']);
                    }
                    if ($user_status==2) {
                        return $this->redirect('/web/company/profile');
                    }
                    if ($user_status==3) {
                        return $this->redirect('/web/seller/profile');
                    }
                }
            }
        }
        return$this->render('becomesupplier', [
            'model' => $model,
        ]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        $country = Location::find()->where(['location_type'=>0])->all();
        //$city = Location::find()->where(['location_type'=>2])->all();
        //var_dump($country);
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect('/web/site/profile');
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,'country'=>$country
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['profile']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $user_status = Yii::$app->user->identity->user_status;
            if ($user_status==1) {
                return $this->redirect(['profile']);
            }
            if ($user_status==2) {
                return $this->redirect('/web/company/profile');
            }
            if ($user_status==3) {
                return $this->redirect('/web/seller/profile');
            }
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        if (Yii::$app->user->isGuest){
            Yii::$app->user->logout();
            return $this->goHome();
        }
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

}
