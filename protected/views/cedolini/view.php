<?php
/* @var $this CedoliniController */
/* @var $model Cedolini */

$this->breadcrumbs=array(
	'Cedolini'=>array('index'),
	$model->mese."/".$model->anno." - ".$model->anagrafica,
);

$this->menu=array(
	array('label'=>'Elenco Cedolini', 'url'=>array('admin')),
	array('label'=>'Nuovo Cedolino', 'url'=>array('index')),
	array('label'=>'Modifica Cedolino', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Cedolino', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Cedolini', 'url'=>array('admin')),
);
?>

<h1>Cedolino <?php echo $model->mese."/".$model->anno." - ".$model->anagrafica; ?></h1>

<?php $this->renderPartial('_view', array('model'=>$model)); ?>



<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'anagrafica',
		'mese',
		'anno',
		'g_lavorati',
		'importo',
		'data',
		'note',
	),
)); ?-->
