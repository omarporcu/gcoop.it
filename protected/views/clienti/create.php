<?php
/* @var $this ClientiController */
/* @var $model Clienti */

$this->breadcrumbs=array(
	'Clienti'=>array('index'),
	'Crea',
);

$this->menu=array(
	array('label'=>'Clienti', 'url'=>array('index')),
	//array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Nuova Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>