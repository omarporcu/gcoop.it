<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */

$this->breadcrumbs=array(
	'Prestiti'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modifica',
);

$this->menu=array(
	array('label'=>'Prestiti', 'url'=>array('index')),
	array('label'=>'Nuovo Prestito', 'url'=>array('create')),
	array('label'=>'Visualizza Prestito', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Modifica Prestito <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>