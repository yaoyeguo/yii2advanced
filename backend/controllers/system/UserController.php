<?php

namespace backend\controllers\system;

use Yii;
use backend\controllers\common\BaseController;
use common\models\Admin;

class UserController extends BaseController
{
    public $layout = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $model = new Admin();
        $model->attributes = $_POST;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

        } else {
            print_r($model->getErrors());exit;
        }
        return json_encode(['errorCode' => "0", 'message' => 'success']);
    }

    public function actionLoginOut()
    {

    }

    public function actionModifyPwd()
    {

    }

    public function actionAdd()
    {

    }

    public function actionUpdate()
    {

    }

    public function actionDlete()
    {

    }

}

