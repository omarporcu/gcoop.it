<?php
/* @var $this VocicontController */
/* @var $model Vocicont */

$id_cont=$model->id_conteggio;

$this->breadcrumbs=array(
	'Vociconts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vocicont', 'url'=>array('index')),
	array('label'=>'Create Vocicont', 'url'=>array('create')),
	array('label'=>'View Vocicont', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vocicont', 'url'=>array('admin')),
);
?>

<h1>Update Vocicont <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>