<?php

namespace app\models;

use yii\db\ActiveRecord;

class Request extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%request}}';
    }

}