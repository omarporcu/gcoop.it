<?php
/* @var $this MezziController */
/* @var $model Mezzi */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modifica',
);

$this->menu=array(
	array('label'=>'Mezzi', 'url'=>array('index')),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
	array('label'=>'Visualizza Mezzo', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Mezzi', 'url'=>array('admin')),
);
?>

<h1>Modifica Mezzo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>