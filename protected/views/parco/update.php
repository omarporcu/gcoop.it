<?php
/* @var $this ParcoController */
/* @var $model Parco */

$this->breadcrumbs=array(
	'Parcos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Mezzi', 'url'=>array('index')),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
	array('label'=>'Visualizza Mezzo', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Mezzi', 'url'=>array('admin')),
);
?>

<h1>Modifica Mezzo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>