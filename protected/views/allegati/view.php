<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

if (isset($_GET['sez'])) {$sez=$_GET['sez'];}
if (isset($_GET['idsez'])) {$idsez=$_GET['idsez'];}
if (isset($_GET['ut'])) {$ut=$_GET['ut'];}
if (isset($_GET['an'])) {$an=$_GET['an'];}

if ($sez == "fatture") {
	
	$this->breadcrumbs=array(
		$sez=>array($sez.'/index'),
		//$ut=>array('anagrafica/view/'.$an),
		//ucfirst(strtolower($sez))=>array($sez.'/view/'.$idsez),	
		'Allegato',
	);
	
	$this->menu=array(
		array('label'=>'Fatture', 'url'=>array('fatture/view/'.$idsez)),
		array('label'=>'Nuovo Allegato', 'url'=>array('create?idsez='.$idsez.'&sez=fatture')),
		//array('label'=>'Modifica Allegato', 'url'=>array('update', 'id'=>$model->id)),
		//array('label'=>'Elimina Allegato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'idsez'=>$_GET['idsez'],'sez'=>$_GET['sez']),'confirm'=>'Are you sure you want to delete this item?')),
		//array('label'=>'Manage Allegati', 'url'=>array('admin')),
	);

} elseif ($sez == "cedolini") {

	$this->breadcrumbs=array(
		$sez=>array($sez.'/index'),
		//$ut=>array('anagrafica/view/'.$an),
		//ucfirst(strtolower($sez))=>array($sez.'/view/'.$idsez),	
		'Allegato',
	);
	
	$this->menu=array(
		array('label'=>'Cedolini', 'url'=>array('cedolini/view/'.$idsez)),
		array('label'=>'Nuovo Allegato', 'url'=>array('create?idsez='.$idsez.'&sez=cedolini')),
		//array('label'=>'Modifica Allegato', 'url'=>array('update', 'id'=>$model->id)),
		//array('label'=>'Elimina Allegato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'idsez'=>$_GET['idsez'],'sez'=>$_GET['sez']),'confirm'=>'Are you sure you want to delete this item?')),
		//array('label'=>'Manage Allegati', 'url'=>array('admin')),
	);
	
} elseif ($sez == "documenti") {

	$this->breadcrumbs=array(
		'Anagrafica'=>array('anagrafica/index'),
		$ut=>array('anagrafica/view/'.$an),
		ucfirst(strtolower($sez))=>array($sez.'/view/'.$idsez),	
		'Allegato',
	);

	$this->menu=array(
		array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
		array('label'=>'Nuovo Allegato', 'url'=>array('create?an='.$an.'&ut='.$ut)),
		array('label'=>'Modifica Allegato', 'url'=>array('update', 'id'=>$model->id, 'an'=>$an, 'sez'=>$_GET['sez'], 'ut'=>$ut, 'idsez'=>$_GET['idsez'])),
		array('label'=>'Elimina Allegato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'idsez'=>$_GET['idsez'],'sez'=>$_GET['sez']),'confirm'=>'Are you sure you want to delete this item?')),
		//array('label'=>'Manage Allegati', 'url'=>array('admin')),
	);

} else {

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

}

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

