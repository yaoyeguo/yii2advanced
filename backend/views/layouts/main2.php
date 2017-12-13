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
// AppAsset::addCss($this, '@web/css/style.css');
AppAsset::addScript($this, '@web/assets/javascript/plug-ins/customScrollbar.min.js');
AppAsset::addScript($this, '@web/assets/javascript/plug-ins/echarts.min.js');
AppAsset::addScript($this, '@web/assets/javascript/plug-ins/layerUi/layer.js');
AppAsset::addScript($this, '@web/assets/javascript/editor/ueditor.config.js');
AppAsset::addScript($this, '@web/assets/javascript/editor/ueditor.all.js');
AppAsset::addScript($this, '@web/assets/javascript/plug-ins/pagination.js');
AppAsset::addScript($this, '@web/assets/javascript/public.js');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<meta name="keywords"  content="设置关键词..." />
	<meta name="description" content="设置描述..." />
	<meta name="author" content="DeathGhost" />
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="main-wrap">
	<div class="side-nav">
		<?= $this->render('side-menu') ?>
	</div>
	<div class="content-wrap">
		<header class="top-hd">
			<?= $this->render('top-hd') ?>
		</header>
		<main class="main-cont content mCustomScrollbar">
			<!--开始::内容-->
			<?= $content ?>
			<!--开始::结束-->
		</main>
		<footer class="btm-ft">
			<?= $this->render('footer') ?>
		</footer>
	</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>