<?php

namespace app\models;

use yii\db\ActiveRecord;

class Contracts extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%contracts}}';
    }

}