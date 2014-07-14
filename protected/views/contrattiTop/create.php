<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$this->breadcrumbs=array(
	'Contratti'=>array('index'),
	'Nuovo Contratto',
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('view')),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Nuovo Contratto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>