<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fatture'=>array('index'),
	'Nuova',
);

$this->menu=array(
	array('label'=>'Fatture', 'url'=>array('index')),
	//array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Nuova Fattura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>