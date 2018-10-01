<?php

namespace app\controllers;

use app\models\Advertisement;
use app\models\Request;
use app\models\Statistics;
use app\models\Uploaded;
use app\models\User;
use app\models\Vessel;
use app\models\UploadImage;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class SellerController extends Controller
{
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionProfile()
    {
        $user = new User();
        $upload = new UploadImage();
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 3) {
                if(Yii::$app->request->isPost){
                    //var_dump('asdasd');exit;
                    $file = UploadedFile::getInstance($upload, 'image');
                    if ($upload->uploadFile($file, Yii::$app->user->identity->img) ){

                        return $this->redirect('/web/seller/profile');
                    }
                    return $this->render('profile', ['user' => $user,'upload'=>$upload]);
                }
                    $user = new User();
                return $this->render('profile', ['user' => $user,'upload'=>$upload]);
                }
            }else{
                $this->redirect(['index']);
            }
    }

    public function actionVessel()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                $vessel = Vessel::find()
                    ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                    ->one();
                return $this->render('vessel', ['vessel' => $vessel]);
            }
        }
    }

    public function actionOffers()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                $userOffers = Vessel::find()
                    ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                    ->all();
                return $this->render('offers', ['userOffers' => $userOffers]);
            }
        }
    }

    public function actionPricing()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                return $this->render('pricing');
            }
        }
    }

    public function actionStatistics()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                $statistics = Statistics::find()
                    ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                    //->orderby(['id'=>SORT_DESC])
                    ->limit(7)
                    ->all();
                return $this->render('statistics', ['statistics' => $statistics]);
            }
        }
    }
    public function actionTerm()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                return $this->render('term');
            }
        }
    }

    public function actionRequest()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                $select_date = Request::find()
                    ->select(['date'])
                    ->distinct()
                    ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                    ->all();
                $select_category = Request::find()
                    ->select(['category'])
                    ->distinct()
                    ->where('user_from = :user_id', [':user_id' => Yii::$app->user->id])
                    ->all();

                if (isset($_POST['ans'])) {
                    //$requests = Request::find()->where('user_id = :user_id',[':user_id'=>$_POST['user_id']])->one();
                    $request = new Request();
                    $user = User::findOne($_POST['id']);
                    $request->user_id = $_POST['id'];
                    $request->user_from = Yii::$app->user->id;
                    //'_csrf'= $_POST['_csrf'];
                    $request->name = $_POST['username'];
                    $request->date = date('Y/m/d');
                    $request->email = $_POST['email'];
                    $request->phone = $_POST['phone'];
                    $request->company = $_POST['company'];
                    $request->category = 'find a practice';
                    $request->message = $_POST['message'];
                    $request->save();
                    //$requests = Request::find()->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])->all();
                    //return $this->render('request',['requests'=>$requests,'date'=>$select_date,'category'=>$select_category]);
                }

                if (isset($_POST['date'])) {
                    //var_dump('sdsdfsd');exit;
                    $requests = Request::find()
                        ->where('date = :date', [':date' => $_POST['date']])
                        ->andWhere('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                        ->all();
                    //var_dump($requests);
                    return $this->render('request', ['requests' => $requests, 'date' => $select_date, 'category' => $select_category]);
                }
                if (isset($_POST['category'])) {
                    $requests = Request::find()
                        ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                        ->andWhere('category = :category', [':category' => $_POST['category']])
                        ->all();
                    return $this->render('request', ['requests' => $requests, 'date' => $select_date, 'category' => $select_category]);
                }

                $requests = Request::find()
                    ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                    ->all();
                return $this->render('request', ['requests' => $requests, 'date' => $select_date, 'category' => $select_category]);

            }
        }
    }

    public function actionAdvertisement()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                $upload = new Uploaded();
                if (Yii::$app->request->isPost) {
                    $file = UploadedFile::getInstance($upload, 'image');
                    $table = Advertisement::find()->where(['id' => $_POST['inp']])->one();
                    if ($upload->uploadFile($file, $table['img'], $table)) {
                        $post = Advertisement::find()->where('id=:id', [':id' => $_POST['inp']])->one();
                        $post->user_id = Yii::$app->user->id;
                        $post->save();
                        return $this->redirect('/web/seller/advertisement');
                    }
                }
                return $this->render('advertisement', ['upload' => $upload]);
            }
        }
    }
}