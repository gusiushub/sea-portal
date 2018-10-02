<?php

namespace app\models;

use Yii;
use app\models\Cv;
use yii\base\Model;


class FindStudent extends Model
{
    //public $name;
    public $email;

    public $body;
    public $action;
    public $id;
    //public $position;
    public $lvleng;
    //public $currency;
    //public $salary;
    public $phone;
    public $company;
    public $file;
    //public $agree ;
    public $faculty;
    public $country;
    public $port;
    public $name;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['email', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['lvleng', 'required'],
            ['faculty', 'required'],
            ['country', 'required'],
            ['port', 'required'],
            ['name', 'required'],

        ];
    }


    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'faculty' => '',
            'lvleng' => '',
            'country' => '',
            'port' => '',
            'name' => '',
            'position' => '',
            'email' => '',
            'body' => '',
            'file' => '',
            'phone' => '',
            'currency' => '',
            'company' => '',

        ];
    }
}