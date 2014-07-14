<?php
/* @var $this AnagraficaController */
/* @var $model Anagrafica */

$this->breadcrumbs=array(
	'Anagrafica'=>array('index'),
	$model->cognome.' '.$model->nome=>array('view','id'=>$model->id),
	'Modifica',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('index')),
	array('label'=>'Nuova Anagrafica', 'url'=>array('create')),
	array('label'=>'Visualizza Anagrafica', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Anagrafica', 'url'=>array('admin')),
);
?>

<h1>Modifica Anagrafica <?php echo $model->cognome." ".$model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>