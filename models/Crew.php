<?php

namespace app\models;

use yii\db\ActiveRecord;

class Crew extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%crew}}';
    }

}