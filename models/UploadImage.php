<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use app\models\User;

class UploadImage extends Model{

    public $image;

    public function rules(){
        return[
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
    public function generateFilename()
    {
        $id = Yii::$app->user->identity->id;
        $user = User::find()->where(['id' => $id])->one();
        $imgName = strtolower(md5(uniqid($this->image->baseName)) . '.' . $this->image->extension);
        $user->img = $imgName;
        $user->save();
        return $imgName;
    }

    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;
        if($this->validate()) {
            $this->deleteCurrentImage($currentImage);
            return $this->saveImage();
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

    public function saveImage()
    {
        $filename = $this->generateFilename();
        $this->image->saveAs($this->getFolder() . $filename);
        return $filename;
    }

//    public function upload(){
//        $user = new User();
//        if($this->validate()){
//            //$imgName = md5($this->image->baseName);
//            $filename = $this->generateFilename();
//            $this->image->saveAs($this->getFolder() . $filename);
//            return $filename;
//            //$this->image->saveAs("public/uploads/{".md5($this->image->baseName)."}.{$this->image->extension}");
//        }else{
//            return false;
//        }
//    }

}