<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$idsez=$_GET['idsez'];
$sez=$_GET['sez'];
$an=$_GET['an'];
$ut=$_GET['ut'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	ucfirst(strtolower($sez))=>array($sez.'/view/'.$idsez),
	'Nuovo Allegato',
);

$this->menu=array(
	array('label'=>'Allegati', 'url'=>array('index')),
	//array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Nuovo Allegato - <?php echo $ut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>