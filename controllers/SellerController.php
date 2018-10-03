<?php

namespace app\controllers;

use app\models\Advertisement;
use app\models\Request;
use app\models\Seller_img;
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
    public function actionAjax()
    {
        $img = new Seller_img();
//       if (isset($_POST['num'])) {
           if ($_GET['id']==1){
               if (0 < $_FILES['file']['error']) {
                   echo 'Error: ' . $_FILES['file']['error'] . '<br>';
               } else {

                   move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                   if (isset($_FILES['file']['name'])) {

                       $img->img1 = md5($_FILES['file']['name']) . $_FILES['file']['name'];

                   }
               }
//           }
       }
        if ($_GET['id']==2) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img2 = md5($_FILES['file']['name']) . $_FILES['file']['name'];

                }
            }
           }

        if ($_GET['id']==3) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img3 = md5($_FILES['file']['name']) . $_FILES['file']['name'];

                }
            }
        }

        if ($_GET['id']==4) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img4 = md5($_FILES['file']['name']) . $_FILES['file']['name'];

                }
            }
        }
        if ($_GET['id']==5) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img5 = md5($_FILES['file']['name']) . $_FILES['file']['name'];
                }
            }
        }
        if ($_GET['id']==6) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img6 = md5($_FILES['file']['name']) . $_FILES['file']['name'];
                }
            }
        }
        if ($_GET['id']==7) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img7 = md5($_FILES['file']['name']) . $_FILES['file']['name'];
                }
            }
        }
        if ($_GET['id']==8) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img8 = md5($_FILES['file']['name']) . $_FILES['file']['name'];
                }
            }
        }
        if ($_GET['id']==9) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img9 = md5($_FILES['file']['name']) . $_FILES['file']['name'];
                }
            }
        }
        if ($_GET['id']==0) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], './public/uploads/' . md5($_FILES['file']['name']) . $_FILES['file']['name']);
                if (isset($_FILES['file']['name'])) {

                    $img->img10 = md5($_FILES['file']['name']) . $_FILES['file']['name'];

                }
            }
        }
        $img->save();


    }
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
                return $this->redirect(['/site']);
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
        return $this->redirect(['/site']);
    }

    public function actionOffers()
    {
        if ($_POST['json_arr']){
            var_dump('asdasdasd');exit;
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
        }
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
            $vessels->flag = $ajax['flag'];
            $vessels->save();
        }
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                $upload = new UploadImage();
                $userOffers = Vessel::find()
                    ->where('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                    ->all();
                if (isset($_POST)){
                    // $this->redirect('/web/seller/offers');
                }
                return $this->render('offers', ['upload'=>$upload,'userOffers' => $userOffers]);
            }
        }
        return $this->redirect(['/site']);
    }

    public function actionPricing()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                return $this->render('pricing');
            }
        }
        return $this->redirect(['/site']);
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
        return $this->redirect(['/site']);
    }
    public function actionTerm()
    {
        if (!Yii::$app->user->isGuest) {
            $status = Yii::$app->user->identity->user_status;
            if ($status == 3) {
                return $this->render('term');
            }
        }
        return $this->redirect(['/site']);
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
                    $requests = Request::find()
                        ->where('date = :date', [':date' => $_POST['date']])
                        ->andWhere('user_id = :user_id', [':user_id' => Yii::$app->user->id])
                        ->all();
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
        return $this->redirect(['/site']);
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
        return $this->redirect(['/site']);
    }
}