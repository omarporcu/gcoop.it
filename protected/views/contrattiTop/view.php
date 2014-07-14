<?php
/* @var $this ContrattiTopController */
/* @var $model ContrattiTop */

$this->breadcrumbs=array(
	'Contratti'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('index')),
	array('label'=>'Nuovo Contratti', 'url'=>array('create')),
	array('label'=>'Modifica Contratto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Contratto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Sicuro di voler eliminare questo Contratto?')),
	//array('label'=>'Manage ContrattiTop', 'url'=>array('admin')),
);
?>

<h1>Dettagli Contratto #<?php echo $model->id; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ncontratto',
		'id_utente',
		'utente',
		'societa',
		'tipologia',
		'data_inizio',
		'data_fine',
		'ruolo',
		'provvigione',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

