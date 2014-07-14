<?php
/* @var $this VocicontController */
/* @var $model Vocicont */

$an=$_GET['an'];
$ut=$_GET['ut'];
$id_cont=$_GET['id_cont'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$an=>array('anagrafica/view/'.$ut),
	'Conteggi'=>array('conteggi/view','id'=>$model->id_conteggio),
	$model->tipologia,
);

$this->menu=array(
	array('label'=>'Conteggio Mensile', 'url'=>array('conteggi/view','id'=>$model->id_conteggio)),
	array('label'=>'Nuova Voce', 'url'=>array('create','id_cont'=>$model->id_conteggio)),
	array('label'=>'Modifica Voce', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Voce', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Vocicont', 'url'=>array('admin')),
);
?>

<h1>Visualizza Voce #<?php echo $model->id; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_conteggio',
		'tipologia',
		'causale',
		'importo',
	),
)); ?-->

<?php $this->renderPartial('_view', array('model'=>$model)); ?>
