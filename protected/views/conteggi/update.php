<?php
/* @var $this ConteggiController */
/* @var $model Conteggi */

$this->breadcrumbs=array(
	'Conteggis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conteggi', 'url'=>array('index')),
	array('label'=>'Create Conteggi', 'url'=>array('create')),
	array('label'=>'View Conteggi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Conteggi', 'url'=>array('admin')),
);
?>

<h1>Update Conteggi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>