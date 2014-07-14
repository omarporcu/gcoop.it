<?php
/* @var $this SediController */
/* @var $model Sedi */

$this->breadcrumbs=array(
	'Sedis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Sedi', 'url'=>array('index')),
	array('label'=>'Nuova Sede', 'url'=>array('create')),
	array('label'=>'Visualizza Sede', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Sedi', 'url'=>array('admin')),
);
?>

<h1>Modifica Sede <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>