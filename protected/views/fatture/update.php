<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fatturea'=>array('index'),
	$model->numero_fattura=>array('view','id'=>$model->numero_fattura),
	'Update',
);

$this->menu=array(
	array('label'=>'Fatture', 'url'=>array('index')),
	array('label'=>'Nuova Fattura', 'url'=>array('create')),
	array('label'=>'Visualizza Fattura', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Modifica Fattura <?php echo $model->numero_fattura; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>