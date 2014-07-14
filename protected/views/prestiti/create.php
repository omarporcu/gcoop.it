<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */

$this->breadcrumbs=array(
	'Prestiti'=>array('index'),
	'Nuovo',
);

$this->menu=array(
	array('label'=>'Prestiti', 'url'=>array('index')),
	//array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Nuovo Prestito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>