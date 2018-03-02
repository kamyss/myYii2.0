<?php

namespace app\controllers;
use app\models\Users;

class UsersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Users();
        $model->load(\Yii::$app->request->post());
        if ($model->validate()) {
            // all inputs are valid
        } else {
            // validation failed: $errors is an array containing error messages
           
            $errors = $model->errors;
            var_dump($errors);
            die;
        }
        return $this->render('index');
    }

}
