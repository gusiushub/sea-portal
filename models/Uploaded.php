<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use app\models\User;

class Uploaded extends Model
{

    public $image;



    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'image' => '',
        ];
    }

    //получаем директорию изображения
    public function getFolder()
    {
        return Yii::getAlias('@app/web') . '/public/uploads/';
    }

    //генерация названия изображения
    public function generateFilename($table)
    {
//        $id = Yii::$app->user->identity->id;
//        $table = Advertisement::find()->where(['id' => $_POST['inp']];
        $imgName = strtolower(md5(uniqid($this->image->baseName)) . '.' . $this->image->extension);
        $table->img = $imgName;
        $table->save();
        return $imgName;
    }

    public function uploadFile(UploadedFile $file, $currentImage,$table)
    {
        $this->image = $file;
        if ($this->validate()) {
            $this->deleteCurrentImage($currentImage);
            return $this->saveImage($table);
        }
    }

    public function deleteCurrentImage($currentImage)
    {
        if ($this->fileExists($currentImage)) {
            unlink($this->getFolder() . $currentImage);
        }
    }

    public function fileExists($currentImage)
    {
        if (!empty($currentImage) && $currentImage != null) {
            return file_exists($this->getFolder() . $currentImage);
        }
    }

    public function saveImage($table)
    {
        $filename = $this->generateFilename($table);
        $this->image->saveAs($this->getFolder() . $filename);
        return $filename;
    }
}
