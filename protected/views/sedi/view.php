<?php
/* @var $this SediController */
/* @var $model Sedi */

$soc=$model->societa->id;
$societa=$model->id_societa;

$this->breadcrumbs=array(
	'Società'=>array('societa/index'),
	$model->societa->ragione_sociale=>array('societa/view/'.$soc),
	'Sedi',
);

$this->menu=array(
	array('label'=>'Società', 'url'=>array('societa/view/'.$soc)),
	array('label'=>'Nuova Sede', 'url'=>array('create?soc='.$soc.'&societa='.$societa)),
	array('label'=>'Modifica Sede', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Sede', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'soc'=>$soc),'confirm'=>'Sicuro di voler eliminare la sede?')),
	//array('label'=>'Manage Sedi', 'url'=>array('admin')),
);
?>

<h1>Sede per <?php echo $model->societa->ragione_sociale; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_societa',
		'regione',
		'provincia',
		'comune',
		'indirizzo',
		'cap',
		'telefono',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>