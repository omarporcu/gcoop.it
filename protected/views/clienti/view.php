<?php
/* @var $this ClientiController */
/* @var $model Clienti */

$this->breadcrumbs=array(
	'Clienti'=>array('index'),
	$model->ragione_sociale,
);

$this->menu=array(
	array('label'=>'Clienti', 'url'=>array('index')),
	array('label'=>'Nuovo Cliente', 'url'=>array('create')),
	array('label'=>'Modifica Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Cliente <?php echo $model->ragione_sociale; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ragione_sociale',
		'tipologia',
		'logo',
		'amministratore',
		'regione',
		'provincia',
		'comune',
		'cap',
		'indirizzo',
		'gruppo',
		'email',
		'telefono',
		'fax',
		'p_iva',
		'c_fiscale',
		'numero_iscrcc',
		'regione_iscrcc',
		'provincia_iscrcc',
		'comune_iscrcc',
		'data_iscrcc',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

