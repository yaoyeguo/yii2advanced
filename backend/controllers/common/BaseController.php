<?php

namespace backend\controllers\common;


use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
    public $layout = 'main2.php';

    public function beforeAction($action)
    {
        return true;
    }

    public function init()
    {
        if (!Yii::$app->session->get('userInfo')) {
            return $this->redirect('http://192.168.31.130:8081/index.php?r=system/user/index');
//            return $this->redirect(['system/user/index']);
        }
    }


}
