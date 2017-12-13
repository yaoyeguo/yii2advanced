<?php

namespace backend\controllers\system;

use Yii;
use backend\controllers\common\BaseController;

class IndexController extends BaseController
{
    public $defaultAction = 'index';

    public function actionIndex()
    {
        $view = Yii::$app->view;
        //服务器域名/IP地址
        $view->params['serverName'] = $_SERVER['SERVER_NAME'];
        //服务器标识
        $view->params['serverUname'] = @php_uname();
        //服务器操作系统
        $os = explode(" ", @php_uname());
        $view->params['serverOs'] = $os[0];
        //服务器语言
        $view->params['serverLanguage'] = getenv("HTTP_ACCEPT_LANGUAGE");
        //服务器主机名
        $view->params['serverHostName'] = $os[1];
        //服务器端口
        $view->params['serverDomain'] = $_SERVER['SERVER_PORT'];
        //绝对路径
        $view->params['serverRoot'] = $_SERVER['DOCUMENT_ROOT'];
        return $this->render('index');
    }
}