<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\FindModel;
use app\models\Contracts;

class FindController extends Controller
{
    public function actionShipboardSupply()
    {
        $model = new FindModel();
        return $this->render('shipboardsupply',['model'=>$model]);
    }

    public function actionShipboardResult()
    {
if (isset($_POST)){

    $search = Contracts::find()->select('*')->where('search = :search' and 'mechanism = :mechanism' and 'maker = :maker', [':search' => $_POST['search'],':maker' => $_POST['maker'],':mechanism' => $_POST['equipment']])->all();
    $mechanism = Contracts::find()->select('*')->where('mechanism = :mechanism', [':mechanism' => $_POST['equipment']])->all();
//var_dump($search);
       $maker = Contracts::find()->select('*')->where('maker = :maker', [':maker' => $_POST['maker']])->all();
        $post = $_POST;
    return $this->render('shipboardresult',['post'=>$post,'maker'=>$maker,'equipment'=>$mechanism,'search'=>$search]);
    }
        //file_put_contents($file, $current);

        return $this->render('shipboardresult');
    }

    public function actionPortServices()
    {
        return $this->render('portservices');
    }

    public function actionRepairs()
    {
        return $this->render('repairs');
    }

    public function actionFindSupplier()
    {
        //$model = Co
        return $this->render('findsupplier');
    }
}