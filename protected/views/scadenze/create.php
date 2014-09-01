<?php
/* @var $this ScadenzeController */
/* @var $model Scadenze */

$this->breadcrumbs=array(
	'Scadenzes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scadenze', 'url'=>array('index')),
	array('label'=>'Manage Scadenze', 'url'=>array('admin')),
);
?>

<h1>Create Scadenze</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>