<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$sez=$_GET['sez'];
$idsez=$_GET['idsez'];
$ut=$_GET['ut'];
$an=$_GET['an'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	ucfirst(strtolower($sez))=>array($sez.'/view/'.$idsez),	
	'Allegato',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	array('label'=>'Nuovo Allegato', 'url'=>array('create?an='.$an.'&ut='.$ut)),
	array('label'=>'Modifica Allegato', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Allegato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'idsez'=>$_GET['idsez'],'sez'=>$_GET['sez']),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Allegato</h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sezione',
		'idsezione',
		'allegato',
		'nome',
		'descrizione',
		'data_inserimento',
		'privato',
		'visibile',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

