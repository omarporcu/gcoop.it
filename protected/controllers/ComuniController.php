<?php

class ComuniController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	
	public function actionUpdateProvinciaNascita()
	{
		if(isset($_POST['Anagrafica']['regione_nascita'])) 
			$regione_nascita = $_POST['Anagrafica']['regione_nascita'];
		else
			return null;
		
		$data=Comuni::model()->findAll(
			array(
				'order'=>'provincia',
				'condition'=>'regione=:regione',
				'params'=>array(':regione'=>$regione_nascita)	
			)
		);
					  
	    $data=CHtml::listData($data,'provincia','provincia');
	    
	    echo CHtml::tag('option',
	    	array('value'=>''),'Seleziona Provincia',true);

	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}	
	
	public function actionUpdateComuneNascita()
	{
		if(isset($_POST['Anagrafica']['provincia_nascita'])) 
			$provincia_nascita = $_POST['Anagrafica']['provincia_nascita'];
		else
			return null;
		
		$data=Comuni::model()->findAll(
			array(
				'order'=>'nome',
				'condition'=>'provincia=:provincia',
				'params'=>array(':provincia'=>$provincia_nascita)	
			)
		);
			  
	    $data=CHtml::listData($data,'nome','nome');
	    
	    echo CHtml::tag('option',
	    	array('value'=>''),'Seleziona Comune',true);

	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}	

	public function actionUpdateProvinciaResidenza()
	{
		if(isset($_POST['Anagrafica']['regione_residenza'])) 
			$regione_residenza = $_POST['Anagrafica']['regione_residenza'];
		else
			return null;
		
		$data=Comuni::model()->findAll(
			array(
				'order'=>'provincia',
				'condition'=>'regione=:regione',
				'params'=>array(':regione'=>$regione_residenza)	
			)
		);
					  
	    $data=CHtml::listData($data,'provincia','provincia');
	    
	    echo CHtml::tag('option',
	    	array('value'=>''),'Seleziona Provincia',true);

	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}	
	
	public function actionUpdateComuneResidenza()
	{
		if(isset($_POST['Anagrafica']['provincia_residenza'])) 
			$provincia_residenza = $_POST['Anagrafica']['provincia_residenza'];
		else
			return null;
		
		$data=Comuni::model()->findAll(
			array(
				'order'=>'nome',
				'condition'=>'provincia=:provincia',
				'params'=>array(':provincia'=>$provincia_residenza)	
			)
		);
			  
	    $data=CHtml::listData($data,'nome','nome');
	    
	    echo CHtml::tag('option',
	    	array('value'=>''),'Seleziona Comune',true);

	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}	

	public function actionUpdateProvincia()
	{
		if(isset($_POST['Societa']['regione'])) 
			$regione = $_POST['Societa']['regione'];
		else
			return null;
		
		$data=Comuni::model()->findAll(
			array(
				'order'=>'provincia',
				'condition'=>'regione=:regione',
				'params'=>array(':regione'=>$regione)	
			)
		);
					  
	    $data=CHtml::listData($data,'provincia','provincia');
	    
	    echo CHtml::tag('option',
	    	array('value'=>''),'Seleziona Provincia',true);

	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}	
	
	public function actionUpdateComune()
	{
		if(isset($_POST['Societa']['provincia'])) 
			$provincia = $_POST['Societa']['provincia'];
		else
			return null;
		
		$data=Comuni::model()->findAll(
			array(
				'order'=>'nome',
				'condition'=>'provincia=:provincia',
				'params'=>array(':provincia'=>$provincia)	
			)
		);
			  
	    $data=CHtml::listData($data,'nome','nome');
	    
	    echo CHtml::tag('option',
	    	array('value'=>''),'Seleziona Comune',true);

	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}	
	
}