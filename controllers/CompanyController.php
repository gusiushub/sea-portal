<?php

namespace app\controllers;



use yii\web\Controller;

class CompanyController extends Controller
{
    public function actionProfile()
    {
        return $this->render('prof');
    }
}