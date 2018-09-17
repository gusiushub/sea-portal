<?php

namespace app\models;

use Yii;
use app\models\Cv;
use yii\base\Model;


class FindCrew extends Model
{
    public $position;
    public $lvleng;
    public $currency;
    public $salary;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
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
            'position' => '',
            'lvleng' => '',
            'currency' => '',
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
}