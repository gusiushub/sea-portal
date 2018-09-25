<?php

namespace app\models;

use yii\db\ActiveRecord;

class Cv extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%cv}}';
    }

}