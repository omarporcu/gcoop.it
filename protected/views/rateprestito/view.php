<?php
/* @var $this RateprestitoController */
/* @var $model Rateprestito */

$this->breadcrumbs=array(
	'Rate'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Rate', 'url'=>array('index')),
	//array('label'=>'Nuova Rata', 'url'=>array('create')),
	array('label'=>'Modifica Rata', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Rata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Rateprestito', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Rata #<?php echo $model->id; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'prestito',
		'societa',
		'anagrafica',
		'rata',
		'importo',
		'data',
		'pagata',
		'note',
	),
)); ?-->

<?php $this->renderPartial('_view', array('model'=>$model)); ?>
