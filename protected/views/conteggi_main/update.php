<?php
/* @var $this Conteggi_mainController */
/* @var $model Conteggi_main */

$this->breadcrumbs=array(
	'Conteggio',
	$model->anagrafica=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Home', 'url'=>array('/site/index')),
	array('label'=>'Conteggio', 'url'=>array('view', 'id'=>$model->id))
);

?>

<h1>Update Conteggi_main <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>