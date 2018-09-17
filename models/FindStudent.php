<?php

namespace app\models;

use Yii;
use app\models\Cv;
use yii\base\Model;


class FindStudent extends Model
{
    public $faculty;
    public $lvleng;
    public $country;
    public $port;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['faculty', 'required'],
            ['lvleng', 'required'],
            ['country', 'required'],
            ['port', 'required'],
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
}