<?php
/* @var $this DocumentiController */
/* @var $model Documenti */

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$model->anagrafica->cognome.' '.$model->anagrafica->nome=>array('anagrafica/view/'.$model->id_anagrafica),
	$model->tipo->nome,
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/index')),
	array('label'=>'Nuovo Documento', 'url'=>array('create')),
	array('label'=>'Visualizza Documento', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Documenti', 'url'=>array('admin')),
);
?>

<h1>Modifica Documento - <?php echo $model->anagrafica->cognome.' '.$model->anagrafica->nome; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>