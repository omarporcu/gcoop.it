<?php
/* @var $this FornitoriController */
/* @var $model Fornitori */

$this->breadcrumbs=array(
	'Fornitori'=>array('index'),
	'Crea',
);

$this->menu=array(
	array('label'=>'Fornitori', 'url'=>array('index')),
	//array('label'=>'Manage Fornitori', 'url'=>array('admin')),
);
?>

<h1>Nuovo Fornitore</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>