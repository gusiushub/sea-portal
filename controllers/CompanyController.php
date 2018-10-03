<?php

namespace app\controllers;

use app\models\Advertisement;
use app\models\Request;
use app\models\Statistics;
use app\models\Uploaded;
use app\models\UploadImage;
use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\DataSelection;
use app\models\Contracts;
use yii\web\UploadedFile;


class CompanyController extends Controller
{
    public function actionLogout()
    {
        if (!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
            return $this->goHome();
        }else{
            return $this->goHome();
        }
    }


    public function actionRequest()
    {
        $select_date = Request::find()
            ->select(['date'])
            ->distinct()
            ->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])
            ->all();
        $select_category = Request::find()
            ->select(['category'])
            ->distinct()
            ->where('user_from = :user_id',[':user_id'=>Yii::$app->user->id])
            ->all();

        if(isset($_POST['ans'])){
            //$requests = Request::find()->where('user_id = :user_id',[':user_id'=>$_POST['user_id']])->one();
            $request = new Request();
            //$user = User::findOne($_POST['id']);
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

        if (isset($_POST['date'])){
            //var_dump('sdsdfsd');exit;
            $requests = Request::find()
                ->where('date = :date',[':date'=>$_POST['date']])
                ->andWhere('user_id = :user_id',[':user_id'=>Yii::$app->user->id])
                ->all();
                 return $this->render('request',['requests'=>$requests,'date'=>$select_date,'category'=>$select_category]);
        }
        if (isset($_POST['category'])){
            $requests = Request::find()
                ->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])
                ->andWhere('category = :category',[':category'=>$_POST['category']])
                ->all();
            return $this->render('request',['requests'=>$requests,'date'=>$select_date,'category'=>$select_category]);
        }

        $requests = Request::find()
            ->where('user_id = :user_id',[':user_id'=>Yii::$app->user->id])
            ->all();
        return $this->render('request',['requests'=>$requests,'date'=>$select_date,'category'=>$select_category]);
    }



    public function actionAdvertisement()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 2) {
                $upload = new Uploaded();
                if (Yii::$app->request->isPost) {
                    $file = UploadedFile::getInstance($upload, 'image');
                    $table = Advertisement::find()->where(['id' => $_POST['inp']])->one();
                    if ($upload->uploadFile($file, $table['img'], $table)) {
                        $post = Advertisement::find()->where('id=:id', [':id' => $_POST['inp']])->one();
                        $post->user_id = Yii::$app->user->id;
                        $post->save();
                        return $this->redirect('/web/company/advertisement');
                    }
                }
                return $this->render('advertisement', ['upload' => $upload]);
            }
        }
    }

    public function actionAjax()
    {
        $date = date('Y/m/d',strtotime(date('Y-m-d').' +1 month'));
        if (isset($_POST['check'])){
            $ajax = json_decode($_POST['check'], true);

            $id = Yii::$app->user->identity->id;
            $num = Contracts::find()->where(['user_id'=>$id])->all();
            $model = new Contracts();
            $model->user_id = $id;
            $model->date = date('Y/m/d');
            $model->date_of_expiry = $date;
            $model->search = $ajax[1];
            $model->mechanism = $ajax[2];
            $model->maker = $ajax[3];
            $model->category = $ajax[0];
            $model->plan = 'free';
            $model->status = 'paid';
            $model->name = count($num);
            return $model->save();
        }
    }

    public function actionProfile()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                $user = new User();
                $upload = new UploadImage();
                if(Yii::$app->request->isPost){
                    $file = UploadedFile::getInstance($upload, 'image');
                    if ($upload->uploadFile($file, Yii::$app->user->identity->img) ){

                        return $this->redirect('/web/company/profile');
                    }
                    return $this->render('prof', ['user' => $user,'upload'=>$upload]);
                }
                //$user = new User();
                    return $this->render('prof', ['user' => $user,'upload'=>$upload]);
            }else{
                return $this->redirect(['/site']);
            }
        }else {
            return $this->redirect(['/site']);
        }
    }

    public function actionPricing()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
            return $this->render('pricing');
            }else{
                return $this->redirect(['/site']);
            }
        }else {
            return $this->redirect(['/site']);
        }
    }

    public function actionStatistics()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                $statistics = Statistics::find()
                    ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                    //->orderby(['id'=>SORT_DESC])
                    ->limit(7)
                    ->all();
                return $this->render('statistics',['statistics'=>$statistics]);
            }else{
                return $this->redirect(['/site']);
            }
        }else {
            return $this->redirect(['/site']);
        }
    }

    public function actionContracts()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                $model = Contracts::find()->select('*')->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])->all();
                return $this->render('contracts',['model'=>$model]);
            }else{
                return $this->redirect(['/site']);
            }
        }else {
            return $this->redirect(['/site']);
        }
    }

    public function actionAddContracts()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                //$model = new DataSelection();
                return $this->render('addcontracts');//,['model' => $model]);
            }else{
                return $this->redirect(['/site']);
            }
        }else {
            return $this->redirect(['/site']);
        }
    }

    public function actionChoosePlan()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
        return $this->render('chooseplan');
            }else{
                return $this->redirect(['/site']);
            }
        }else {
            return $this->redirect(['/site']);
        }
    }

    public function actionPay()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                return $this->render('pay');
            }else{
                return $this->redirect(['/site']);
            }
        }else {
            return $this->redirect(['/site']);
        }
    }

    public function actionPlaceAdverticement()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
            return $this->render('terms');
            }else{
                return $this->redirect(['/site']);
            }
        }
        return $this->redirect(['/site']);
    }

    public function actionIncomingRequests()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
        return $this->render('terms');
            }else{
                return $this->redirect(['/site']);
            }
        }
            return $this->redirect(['/site']);
    }

    public function actionTermsConditions()
    {
        if (!Yii::$app->user->isGuest){
            $status = Yii::$app->user->identity->user_status;
            if ( $status == 2) {
                return $this->render('terms');
            }else{
                return $this->redirect(['/site']);
            }
        }
        return $this->redirect(['/site']);

    }
}