<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Cv;

/**
* ContactForm is the model behind the contact form.
*/
class CvForm extends Model
{
//public $user_id;
public $category;
public $faculty;
public $id;


/**
 * @return array the validation rules.
 */
public function rules()
{
    return [
        [['category'], 'string'],
        ];
}

/**
 * @return array customized attribute labels
 */
public function attributeLabels()
{
    return [
        'category' => '',
        'faculty' => '',
    ];
}

    public function addcv()
    {
        if (!$this->validate()) {
            return null;
        }

        $cv = new Cv();
        $cv->user_id = 11;

        return $cv->save();
    }
}