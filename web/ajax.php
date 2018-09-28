<?php

use app\models\User;

$data = array();
session_start();
//var_dump($_SESSION['file_name']);
if( isset( $_GET['uploadfiles'] ) ){
    $error = false;
    $files = array();

    $uploaddir = './public/uploads/'; // . - текущая папка где находится submit.php

    // Создадим папку если её нет

    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

    // переместим файлы из временной директории в указанную
    foreach( $_FILES as $file ){
        if( move_uploaded_file( $file['tmp_name'], $uploaddir .md5($file['name']). basename($file['name']) ) ){
            $files[] = realpath( $uploaddir . $file['name'] );
            return $_SESSION['file_name'] = md5($file['name']). basename($file['name']);
        }
        else{
            $error = true;
        }
    }
    }

    if( isset( $_GET['avatar'] ) ){
        $error = false;
        $files = array();
        $uploaddir = './public/uploads/'; // . - текущая папка где находится submit.php
        if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );
        // переместим файлы из временной директории в указанную
        foreach( $_FILES as $file ){
            if( move_uploaded_file( $file['tmp_name'], $uploaddir .md5($file['name']). basename($file['name']) ) ){
                $files[] = realpath( $uploaddir . $file['name'] );
                //$user = User::find()->where('id=:id',[':id'=>Yii::$app->user->id])->one();
                $_SESSION['avatar'] = md5($file['name']). basename($file['name']);
                return $_SESSION['avatar'];
                //return $_SESSION['avatar'] = md5($file['name']). basename($file['name']);
            }
            else{
                $error = true;
            }
        }

    //$data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );

    //echo json_encode( $data );
}

