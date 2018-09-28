<?php

namespace app\models;

use yii\db\ActiveRecord;

class Advertisement extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%advertisement}}';
    }

}