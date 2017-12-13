<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

AppAsset::addCss($this, '@web/css/style.css');
AppAsset::addCss($this, '@web/css/reset.css');
AppAsset::addCss($this, '@web/css/plug-ins/customScrollbar.min.css');
AppAsset::addScript($this, '@web/assets/javascript/plug-ins/customScrollbar.min.js');
AppAsset::addScript($this, '@web/assets/javascript/public.js');
AppAsset::addScript($this, '@web/assets/javascript/pages/login.js');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>登录-后台管理系统</title>
    <meta name="keywords" content="设置关键词..."/>
    <meta name="description" content="设置描述..."/>
    <meta name="author" content="DeathGhost"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="icon" href="images/icon/favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>
<body class="login-page">
<?php $this->beginBody() ?>
<section class="login-contain">
    <header>
        <h1>后台管理系统</h1>
        <p>management system</p>
    </header>
    <div class="form-content">
        <ul>
            <li>
                <div class="form-group">
                    <label class="control-label">管理员账号：</label>
                    <input type="text" placeholder="" class="form-control form-underlined" id="adminName"/>
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label class="control-label">管理员密码：</label>
                    <input type="password" placeholder="" class="form-control form-underlined" id="adminPwd"/>
                </div>
            </li>
            <li>
                <label class="check-box">
                    <input type="checkbox" name="remember"/>
                    <span>记住账号密码</span>
                </label>
            </li>
            <li>
                <button class="btn btn-lg btn-block" id="entry">立即登录</button>
            </li>
            <li>
                <p class="btm-info">©Copyright 2006-2010 <a href="#" target="_blank"
                                                            title="DeathGhost">DeathGhost.cn</a></p>
                <address class="btm-info">陕西省西安市雁塔区</address>
            </li>
        </ul>
    </div>
</section>
<div class="mask"></div>
<div class="dialog">
    <div class="dialog-hd">
        <strong class="lt-title">标题</strong>
        <a class="rt-operate icon-remove JclosePanel" title="关闭"></a>
    </div>
    <div class="dialog-bd">
        <!--start::-->
        <p>这里是基础弹窗,可以定义文本信息，HTML信息这里是基础弹窗,可以定义文本信息，HTML信息。</p>
        <!--end::-->
    </div>
    <div class="dialog-ft">
        <button class="btn btn-info JyesBtn">确认</button>
        <button class="btn btn-secondary JnoBtn">关闭</button>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

