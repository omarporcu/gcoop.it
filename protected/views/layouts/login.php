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
		
		<div 
			class="container" 
			id="page" 
			style="
				width: 300px !important;
				height: 320px !important; 
				position: absolute !important; 
				top: 50% !important; 
				left: 50% !important;
				margin-top: -150px !important;
				margin-left: -160px !important;
		">
			
			<div id="header">
				<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			</div><!-- header -->
			
			<div id="mainmenu">
				&nbsp;
			</div>
			
			<p></p>

			<?php echo $content; ?>

			<div class="clear"></div>
			
			<div id="footer">
			</div><!-- footer -->

		</div><!-- page -->

	</body>

</html>
