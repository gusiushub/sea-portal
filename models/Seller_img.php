<?php

namespace app\models;

use yii\db\ActiveRecord;

class Seller_img extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%seller_img}}';
    }

}