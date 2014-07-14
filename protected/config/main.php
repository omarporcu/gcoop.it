<?php

// Define a path alias for the Bootstrap extension as it's used internally.
// In this example we assume that you unzipped the extension under protected/extensions.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Gesticoop',
	'defaultController' => 'site/login',
	'language'=>'it',
	'sourceLanguage'=>'it_it',

	//--bootstrap
	//'theme'=>'bootstrap',
	//--

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			
			//--bootstrap
			/*'generatorPaths'=>array(
				'bootstrap.gii',
			),
			//--*/
			
			'class'=>'system.gii.GiiModule',
			'password'=>'gesticoop',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		
		//--bootstrap
		/*'bootstrap'=>array(
			'class'=>'bootstrap.components.Bootstrap',
		),
		//--*/
		
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		//LOCAL
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=gcoopit95679',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		

		//LIVE_OLD
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=62.149.150.148;dbname=Sql526871_5',
			'emulatePrepare' => true,
			'username' => 'Sql526871',
			'password' => '68f9a750',
			'charset' => 'utf8',
		),
		*/

		//LIVE
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=sql.gcoop.it;dbname=gcoopit95679',
			'emulatePrepare' => true,
			'username' => 'gcoopit95679',
			'password' => 'jahjeegh',
			'charset' => 'utf8',
		),
		*/
				 
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'omarporcu@tiscali.it',
		'defaultPageSize'=>20,
	),
	
);