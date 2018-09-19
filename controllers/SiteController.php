<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\SignupForm;
use app\models\UserProfile;
use app\models\BecomeSupplier;
use app\models\UploadImage;
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

    public function actionSellerAjax()
    {
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
        if (isset($_POST['profile_personal4_1'])){
            $ajax = json_decode($_POST['profile_personal4_1'], true);
            $cv = new Cv();
            $cv->user_id = Yii::$app->user->identity->id;
            $cv->date = date('Y/m/d');
            $cv->date_expiry = date('Y/m/d');
            $cv->category = $ajax['category'];
            $cv->faculty = $ajax['faculty'];
            $cv->lvleng = $ajax['levelofeng'];
            $cv->country = $ajax['country'];
            $cv->port = $ajax['port'];
            $cv->plan = 'free';
            $cv->status = 'paid';

            return $cv->save();
        }

        if (isset($_POST['profile_personal4_1_job'])){
            $ajax = json_decode($_POST['profile_personal4_1_job'], true);
            $cv = new Cv();
            $cv->user_id = Yii::$app->user->identity->id;
            $cv->date = date('Y/m/d');
            $cv->date_expiry = date('Y/m/d');
            $cv->category = $ajax['category'];
            $cv->salary_to = $ajax['salary_min'];
            $cv->salary_from = $ajax['salary_max'];
            $cv->currency = $ajax['currency'];
            $cv->position = $ajax['position'];
            $cv->plan = 'free';
            $cv->status = 'paid';

            return $cv->save();
        }
    }


    public function actionAjax()
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

    public function actionUpload(){
        Yii::$app->mailer->compose()
            ->setFrom('from@domain.com')
            ->setTo('to@domain.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
    }

    public function actionCvJob()
    {
        //$cv = new Cv();
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
                    //var_dump(Yii::$app->user->identity->img);exit;
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
        if (Yii::$app->user->isGuest==false){
            return $this->render('pricing');
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionCv()
    {
        if (Yii::$app->user->isGuest==false){
            $userCv = Cv::find()->select('*')->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();

            return $this->render('cv',['userCv'=>$userCv]);
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionTerms()
    {
        if (Yii::$app->user->isGuest==false){
            return $this->render('terms');
        }else {
            $this->redirect(['index']);
        }
    }

    public function actionStatistics()
    {
        if (Yii::$app->user->isGuest==false){
            return $this->render('statistics');
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

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect('/web/site/profile');
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
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
