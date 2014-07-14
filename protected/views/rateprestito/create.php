<?php
/* @var $this RateprestitoController */
/* @var $model Rateprestito */

$this->breadcrumbs=array(
	'Rate'=>array('index'),
	'Nuova',
);

$this->menu=array(
	array('label'=>'Rate', 'url'=>array('index')),
	//array('label'=>'Manage Rateprestito', 'url'=>array('admin')),
);
?>

<h1>Nuova Rata</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>