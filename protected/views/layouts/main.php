<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/scadenze/index')),
				array('label'=>'Anagrafica', 'url'=>array('/anagrafica')),
				array('label'=>'Società', 'url'=>array('/societa')),
				array('label'=>'Mezzi', 'url'=>array('/parco')),
				array('label'=>'Contratti', 'url'=>array('/contrattiTop')),
				/*array('label'=>'Prestiti', 'url'=>array('/prestiti')),*/
				array('label'=>'Fatture', 'url'=>array('/fatture')),
				array('label'=>'Clienti', 'url'=>array('/clienti')),
				array('label'=>'Fornitori', 'url'=>array('/fornitori')),
				array('label'=>'Conteggi', 'url'=>array('/conteggi_main')),
				array('label'=>'Cedolini', 'url'=>array('/cedolini')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Home',array('scadenze/index'))
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<center>
			Copyright &copy; <?php echo date('Y'); ?> by Hymedia.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</center>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
