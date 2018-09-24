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
    public $company ;
    public $file ;
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
            [[ 'email', 'body'], 'required'],
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

    public function search()
    {
        $businessAdvancedPlan = Cv::find()->where(['like', 'faculty', $this->faculty])
            ->andWhere(['like', 'lvleng',$this->lvleng])
            ->andWhere(['like', 'country', $this->country])
            ->andWhere(['like', 'port', $this->port])
            ->andWhere('category = :category',[':category'=>'find a practice'])
            ->all();
        return $businessAdvancedPlan;
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function sendMail($emailto,$emailfrom,$body,$subject)
    {
        Yii::$app->mailer->compose()
            ->setFrom($emailto)
            ->setTo($emailfrom)
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();//->setHtmlBody('<b>текст сообщения в формате HTML</b>')

    }
}