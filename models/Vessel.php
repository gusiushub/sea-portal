<?php

namespace app\models;

use yii\db\ActiveRecord;

class Vessel extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%vessel}}';
    }

}