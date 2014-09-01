<?php
/* @var $this ScadenzeController */
/* @var $model Scadenze */

$this->breadcrumbs=array(
	'Scadenzes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scadenze', 'url'=>array('index')),
	array('label'=>'Create Scadenze', 'url'=>array('create')),
	array('label'=>'View Scadenze', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Scadenze', 'url'=>array('admin')),
);
?>

<h1>Update Scadenze <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>