<?php
/* @var $this RateprestitoController */
/* @var $model Rateprestito */

$this->breadcrumbs=array(
	'Rate'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modifica',
);

$this->menu=array(
	array('label'=>'Rate', 'url'=>array('index')),
	array('label'=>'Nuova Rata', 'url'=>array('create')),
	array('label'=>'Visualizza Rata', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Rateprestito', 'url'=>array('admin')),
);
?>

<h1>Modifica Rata <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>