<?php
/* @var $this ParcoController */
/* @var $model Parco */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	'Nuovo',
);

$this->menu=array(
	array('label'=>'Mezzi', 'url'=>array('index')),
	//array('label'=>'Manage Parco', 'url'=>array('admin')),
);
?>

<h1>Nuovo Mezzo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>