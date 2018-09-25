<?php

namespace app\models;

use yii\db\ActiveRecord;

class Statistics extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%statistics}}';
    }

}