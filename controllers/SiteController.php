<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\SignupForm;
use app\models\UserProfile;
use app\models\BecomeSupplier;
use app\models\Ajax;


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


    public function actionButton()
    {
        //$model= new CouponForm();
        if(\Yii::$app->request->isAjax){
            $_SESSION['a'] = \Yii::$app->request->isAjax;
            var_dump(\Yii::$app->request->isAjax);
           // var_dump(\Yii::$app->request->isAjax);exit;
//            if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
//                // выполняем необходимые операции с базой
//                print_r($model);
//            }
        }
    }

    public function actionAjax()
    {
        $model = new Ajax();

        if ($model->load(Yii::$app->request->isAjax)) {
            $model->profileUpdate();
        }
        //var_dump($user->username);
        //if(\Yii::$app->request->isAjax) {
//        if (isset($_POST['profile1'])) {
//            $profile = json_decode($_POST['profile1'], true);
//
//            //$ajax = new Ajax($profile['company']);
//            //$ajax->profileUpdate();
//            $filename = __DIR__ . '/data.php';  // Путь куда записать содержимое файла
//            //$profile = json_decode($_POST['profile1'],true);
//            //$profile = $_POST['profile1'];
//            $string = 'POST-  ' .$profile['company'] ;
//            file_put_contents($filename, $string);
//
//            $user->username = $profile['company'];
//
//            $user->save();//? $users : null;
//        }

       // }
    }

    public function actionProfile()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 1) {
                //$profile = new UserProfile();
                $model = new User();
                return $this->render('profile', ['model' => $model]);
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
            return $this->render('cv');
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

    /**
     * добавить пользователя автоматически
     *
     * @return mixed
     */
//    public function actionAdd()
//    {
//        $model = User::find()->where(['username' => 'admin'])->one();
//        if (empty($model)) {
//            $user = new User();
//            $user->username = 'admin';
//            $user->email = 'admin@yoursite.ru';
//            $user->setPassword('admin');
//            $user->generateAuthKey();
//            if ($user->save()) {
//                echo 'good';
//            }
//        }
//    }


    public function actionFindSupplier()
    {
        return $this->render('findsupplier');
    }

    public function actionBecomeSupplier()
    {
        $model = new BecomeSupplier();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
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
                    return $this->goHome();
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
