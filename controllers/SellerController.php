<?php

namespace app\controllers;

use app\models\Request;
use app\models\Statistics;
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
        //$user = new User();
        $upload = new UploadImage();
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 3) {
                //$user = new User();










                $upload = new UploadImage();
                $model = new User();
                if(Yii::$app->request->isPost){
                    $file = UploadedFile::getInstance($upload, 'image');
                    if ($upload->uploadFile($file, Yii::$app->user->identity->img)){
                        return $this->redirect('/web/site/profile');
                    }
                    return $this->render('profile', ['model' => $model,'upload'=>$upload]);
                }
                return $this->render('profile', ['model' => $model,'upload'=>$upload]);
                }
            }else{
                $this->redirect(['index']);
            }
    }

    public function actionVessel()
    {
        $vessel = Vessel::find()->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->one();
        return $this->render('vessel',['vessel'=>$vessel]);
    }

    public function actionOffers()
    {
        $userOffers = Vessel::find()->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();
        return $this->render('offers',['userOffers'=>$userOffers]);
    }

    public function actionPricing()
    {
        return $this->render('pricing');
    }

    public function actionStatistics()
    {
        $statistics = Statistics::find()->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->andWhere('date = :date',[':date'=>date('Y.m.d')])->all();
    //var_dump($statistics);
        return $this->render('statistics',['statistics'=>$statistics]);
    }
    public function actionTerm()
    {
        return $this->render('term');
    }

    public function actionRequest()
    {
        if (isset($_POST['date'])){
            //var_dump('sdsdfsd');exit;
            $requests = Request::find()->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])->andWhere('date = :date',[':date'=>Yii::$app->user->id])->all();
            return $this->render('request',['requests'=>$requests]);
        }
        if (isset($_POST['category'])){
            $requests = Request::find()->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])->andWhere('category = :category',[':category'=>Yii::$app->user->id])->all();
            return $this->render('request',['requests'=>$requests]);
        }
        if (isset($_POST['date'])){
            $requests = Request::find()->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])->andWhere('date = :date',[':date'=>Yii::$app->user->id])->andWhere('category = :category',[':category'=>Yii::$app->user->id])->all();
            return $this->render('request',['requests'=>$requests]);
        }
        if(isset($_POST['ans'])){
            $requests = Request::find()->where('user_id = :user_id',[':user_id'=>$_POST['user_id']])->one();
            $request = new Request();
            $user = User::findOne($requests['user_id']);
            $request->user_id = Yii::$app->user->id;
            $request->user_from = Yii::$app->user->id;
            //'_csrf'= $_POST['_csrf'];
            $request->name = $user['username'];
            $request->date = date('Y/m/d');
            $request->email = $requests['email'];
            $request->phone = $requests['phone'];
            $request->company = $requests['company'];
            $request->category = 'find a practice';
            $request->message = $_POST['message'];
            $request->save();
        }
        $requests = Request::find()->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])->all();
        return $this->render('request',['requests'=>$requests]);
    }

    public function actionAdvertisement()
    {
        return $this->render('advertisement');
    }

}