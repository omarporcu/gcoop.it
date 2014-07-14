<?php
/* @var $this AnagraficaController */
/* @var $model Anagrafica */

$this->breadcrumbs=array(
	'Anagrafica'=>array('index'),
	'Nuova',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('index')),
	//array('label'=>'Manage Anagrafica', 'url'=>array('admin')),
);
?>

<h1>Nuova Anagrafica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>