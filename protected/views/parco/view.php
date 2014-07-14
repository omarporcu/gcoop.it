<?php
/* @var $this ParcoController */
/* @var $model Parco */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	$model->targa,
);

$this->menu=array(
	array('label'=>'Mezzi', 'url'=>array('index')),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
	array('label'=>'Modifica Mezzo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Mezzo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Sei sicuro di voler eliminare il mezzo?')),
	//array('label'=>'Manage Parco', 'url'=>array('admin')),
);
?>

<h1>Dettagli Mezzo - Targa: <?php echo $model->targa; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marca',
		'modello',
		'prezzo',
		'rata',
		'targa',
		'immatricolazione',
		'proprietario',
		'utente',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
