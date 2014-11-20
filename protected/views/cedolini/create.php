<?php
/* @var $this CedoliniController */
/* @var $model Cedolini */

$this->breadcrumbs=array(
	'Cedolini'=>array('index'),
	'Nuovo',
);

$this->menu=array(
	//array('label'=>'Home', 'url'=>array('/scadenze/index')),
	array('label'=>'Elenco Cedolini', 'url'=>array('admin')),
);
?>

<h1>Nuovo Cedolino</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>