<?php
/* @var $this ScadenzeController */
/* @var $model Scadenze */

$this->breadcrumbs=array(
	'Scadenzes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Scadenze', 'url'=>array('index')),
	array('label'=>'Create Scadenze', 'url'=>array('create')),
	array('label'=>'Update Scadenze', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scadenze', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scadenze', 'url'=>array('admin')),
);
?>

<h1>View Scadenze #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marca',
		'modello',
		'prezzo',
		'rata',
		'targa',
		'immatricolazione',
		'assicurazione',
		'scadenza_assicurazione',
		'scadenza_bollo',
		'proprietario',
		'assegnatario',
		'utente',
		'note',
	),
)); ?>
