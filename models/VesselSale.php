<?php

namespace app\models;

use yii\base\Model;


class VesselSale extends Model
{
    public $type;
    public $vesOption;
    public $yearTo;
    public $yearFrom;
    public $leigthTo;
    public $leigthFrom;
    public $draftTo;
    public $draftFrom;
    public $deadweightTo;
    public $deadweightFrom;
    public $flag;
    public $priceTo;
    public $priceFrom;


    public function attributeLabels()
    {
        return [
            'type' => '',
            'vesOption' => '',
            'yearTo' => '',
            'yearFrom' => '',
            'leigthTo' => '',
            'leigthFrom' => '',
            'draftTo' => '',
            'draftFrom' => '',
            'deadweightTo' => '',
            'deadweightFrom' => '',
            'flag' => '',
            'priceTo' => '',
            '$priceFrom' => '',
        ];
    }
}