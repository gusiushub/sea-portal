<?php

namespace app\models;

use yii\base\Model;


class FindModel extends Model
{
    public $search;
    public $equipment;
    public $maker;


    public function rules()
    {
        return [
            [['search'], 'required'],
            [['equipment'], 'required'],
            [['maker'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'search' => '',
            'equipment' => '',
            'maker' => '',
        ];
    }

    public function shipboardSupply()
    {

    }
}