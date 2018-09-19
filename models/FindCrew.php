<?php

namespace app\models;

use Yii;
use app\models\Cv;
use yii\base\Model;


class FindCrew extends Model
{
    public $name;
    public $email;
    //public $subject;
    public $body;
    public $position;
    public $lvleng;
    public $currency;
    public $salary;
    public $phone;
    public $company ;
    public $file ;
    public $agree ;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body', 'agree'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['salary', 'required'],
            ['position', 'required'],
            ['lvleng', 'required'],
            ['currency', 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'salary' => '',
            'name' => '',
            'position' => '',
            'email' => '',
            'body' => '',
            'file' => '',
            'lvleng' => '',
            'phone' => '',
            'currency' => '',
            'company' => '',
            'agree' => '',
        ];
    }

    public function search()
    {
        $businessAdvancedPlan = Cv::find()->where(['like', 'position', $this->position])
            ->andWhere(['like', 'lvleng',$this->lvleng])
            ->andWhere(['like', 'currency', $this->currency])
            ->andWhere('category = :category',[':category'=>'find a job'])
            ->andWhere(['>=','salary_from', $this->salary])
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