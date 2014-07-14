<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fattura'=>array('index'),
	$model->numero_fattura,
);

$this->menu=array(
	array('label'=>'Fatture', 'url'=>array('index')),
	array('label'=>'Nuova Fattura', 'url'=>array('create')),
	array('label'=>'Modifica Fattura', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Fattura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Dettagli Fattura <?php echo $model->numero_fattura; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero_fattura',
		'tipo',
		'societa',
		'cliente',
		'causale',
		'descrizione',
		'imponibile',
		'data',
		'data_accredito',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
