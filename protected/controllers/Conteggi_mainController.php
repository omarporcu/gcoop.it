<?php

class Conteggi_mainController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','getAnag','anagraficaAutocomplete','anagAutocomp','print'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionIndex()
	//public function actionCreate()
	{
		$model=new Conteggi_main;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Conteggi_main']))
		{
			$model->attributes=$_POST['Conteggi_main'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Conteggi_main']))
		{
			$model->attributes=$_POST['Conteggi_main'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	/*public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Conteggi_main');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}*/

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Conteggi_main('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Conteggi_main']))
			$model->attributes=$_GET['Conteggi_main'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Conteggi_main the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Conteggi_main::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Conteggi_main $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='conteggi-main-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionGetAnag()
	{
		/*$src=$_POST['id'];

		$tables="comune_residenza,id_societa,mansione";

		$sql="SELECT '$tables' FROM tbl_anagrafica WHERE id='$src'";	
		$elem=Yii::app()->db->createCommand($sql)->queryScalar();

		foreach ($elem as $item){
			$item=$dataReader->readAll();
			echo $item;
		};*/
				
		$riga=array();
		$res=array();
		//$id=$_POST['id'];
		$id="";
		
		if (isset($id))
		{
			//SELECT from ANAGRFICA
			$qtxt="SELECT nome,cognome,comune_residenza,id_societa,mansione FROM tbl_anagrafica WHERE id='$id'";
			$command =Yii::app()->db->createCommand($qtxt);
			//$command->bindValue(":id", '%'.$_POST['id'].'%', PDO::PARAM_STR);
			$res=$command->queryAll();
		}
			
		foreach ($res as $r)
        {
                $riga[] = array(
                        'nome'=>$r['nome'],
						'cognome'=>$r['cognome'],
                        'citta'=>$r['comune_residenza'],
                        'societa'=>$r['id_societa'],
                        'mansione'=>$r['mansione'],
                );
        }
		
		$cognomenome=addslashes($riga[0]['cognome']." ".$riga[0]['nome']);
		//echo $$cognomenome;
		
		//SELECT from MEZZI
		$qtxt1="SELECT targa FROM tbl_mezzi WHERE assegnatario LIKE '$cognomenome'";
		$command1 =Yii::app()->db->createCommand($qtxt1);
		//$command->bindValue(":id", '%'.$_POST['id'].'%', PDO::PARAM_STR);
		$res1=$command1->queryAll();

		foreach ($res1 as $r)
        {
                $riga[] = array(
                        'targa'=>$r['targa'],
                );
        }

	    echo CJSON::encode($riga);
    	Yii::app()->end();
	
	}

	public function actionAnagAutocomp()
	{
		$riga=array();
		
		if (isset($_GET['term']))
		{
			$q = new CDbCriteria(
				array(
					'condition'=>"nome LIKE :nome OR cognome LIKE :nome",
					'params'=>array(':nome'=>'%'.$_GET['term'].'%'),	
				)
			);
						
			$anagrafica=Anagrafica::model()->findAll($q);
			
			foreach ($anagrafica as $r) 
			{
				
				$cognomenome = ltrim(rtrim($r['cognome']))." ".ltrim(rtrim($r['nome']));
					
				$t = new CDbCriteria(
					array(
						'condition'=>"assegnatario LIKE :anag",
						//'params'=>array(':nome'=>'%'.$_GET['term'].'%'),
						'params'=>array(':anag'=>'%'.$cognomenome.'%'),
					)
				);
				
				$targa=Mezzi::model()->findAll($t);
				
				foreach ($targa as $rt) {
					//	$tar[]=array($rt['targa']);
					$tar[]=$rt['targa'];
				}

				$riga[]=array(
					'id'=>$r['id'],
	                'label'=>ltrim(rtrim($r['nome']))." ".ltrim(rtrim($r['cognome'])),
	                'value'=>ltrim(rtrim($r['nome']))." ".ltrim(rtrim($r['cognome'])),
	                'citta'=>$r['comune_residenza'],
	                'societa'=>$r['id_societa'],
	                'mansione'=>$r['mansione'],
	                'targa'=>$tar,
	                //'targa'=>$cognomenome,
				);
								
				/*$targa=Mezzi::model()->findAll($t);
				
				foreach ($targa as $rt) 
				{
				
					array_push($riga, array(
						
						'targa'=>$rt['targa'],
						
					));
					
				}*/
				
			}
		
		}

	    echo CJSON::encode($riga);
    	Yii::app()->end();
		
	}

	public function actionAnagraficaAutocomplete()
	{
		$riga=array();
		$res=array();
		
		if (isset($_GET['term']))
		{
			$qtxt="SELECT id,nome,cognome,comune_residenza,id_societa,mansione FROM tbl_anagrafica WHERE nome LIKE :nome OR cognome LIKE :nome ORDER BY nome,cognome";
			$command =Yii::app()->db->createCommand($qtxt);
			$command->bindValue(":nome", '%'.$_GET['term'].'%', PDO::PARAM_STR);
			$res=$command->queryAll();
		}
			
		foreach ($res as $r)
        {
                $qtarga="SELECT targa FROM tbl_mezzi WHERE assegnatario LIKE :nome";
                $ctarga=Yii::app()->db->createCommand($qtarga);
				$ctarga->bindValue(":nome", '%'.$_GET['term'].'%', PDO::PARAM_STR);
				$rtarga=$command->queryAll();

                $riga[] = array(
                        'id'=>$r['id'],
                        'label'=>ltrim(rtrim($r['nome']))." ".ltrim(rtrim($r['cognome'])),
                        'value'=>ltrim(rtrim($r['nome']))." ".ltrim(rtrim($r['cognome'])),
                        'citta'=>$r['comune_residenza'],
                        'societa'=>$r['id_societa'],
                        'mansione'=>$r['mansione'],
						//'targa'=>Mezzi::model()->findByPk($r['nome']." ".$r['cognome']),
                        //'targa'=>array('cognome'=>$r['cognome'],'nome'=>$r['nome'])),
                );
        }
		
		//var_dump($riga[0]['nome']." ".$riga[0]['cognome']);
		/*$cognomenome=addslashes($riga[0]['cognome']." ".$riga[0]['nome']);
		$cognomenome=addslashes($riga[0]['value']);
		
		//SELECT from MEZZI
		$qtxt1="SELECT targa FROM tbl_mezzi WHERE assegnatario LIKE '$cognomenome' or assegnatario LIKE '$id'";
		var_dump($qtxt1);
		$command1 =Yii::app()->db->createCommand($qtxt1);
		//$command->bindValue(":id", '%'.$_POST['id'].'%', PDO::PARAM_STR);
		$res1=$command1->queryAll();

		foreach ($res1 as $r)
        {
                $riga[] = array(
                        'targa'=>$r['targa'],
                );
        }
		*/
	    echo CJSON::encode($riga);
    	Yii::app()->end();
	
	}

	public function actionPrint($id_conteggio)
	{
		
		$id_conteggio=$_GET['id_conteggio'];
		
		$model=new Vocicont;
		$model->unsetAttributes();
		
		$conteggio=Conteggi::model()->findByPk($id_conteggio);
		
		$this->widget('ext.pdffactory.EPdfFactoryHeart',array(
			'title'=>'Stampa Conteggi',
			'anagrafica'=>$conteggio->anagrafica,
			'mese'=>$conteggio->mese,
			'anno'=>$conteggio->anno,
			'mansione'=>$conteggio->mansione,
			'targa'=>$conteggio->targa,
			'societa'=>$conteggio->societa,
			'citta'=>$conteggio->citta,
			'bonifico'=>$conteggio->bonifico,
			//'totale'=>$conteggio->totale,
			'totale'=>Vocicont::model()->getTotals($conteggio->id),
			'note'=>$conteggio->note,
			'dataProvider'=>$model->searchByConteggio($id_conteggio),
			'filter'=>$model,
			'columns'=>array(
				'tipologia',
				'causale',
				'importo',
			)
		));

	}	
	

}
