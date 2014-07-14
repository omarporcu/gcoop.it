<?php

	/**
	 * 
	 */
	class LogoController extends CController {
		
		public function actionCreate() 
		{
			$model=new Logo;
			if(isset($_POST['Logo']))
			{
				$model->attributes=$_POST['Logo'];
				$model->image=CUploadedFile::getInstance($model, 'image');
				if ($model->save()) 
				{
					$model->image->saveAs('/images');
					// redirect to success page	
				}
			}
			$this->render('create', array('model'=>$model));
		}
	}
	

?>