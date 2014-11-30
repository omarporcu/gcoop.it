<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$oggetto = "Nuovo Allegato";
$mitem = "Allegati";

$idsez=$_GET['idsez'];
$sez=$_GET['sez'];
if ($sez=="parco") {
	$an="0";
	$targa=$_GET['targa'];
	$ut=$targa;

	$this->breadcrumbs=array(
		'Mezzi'=>array('parco/index'),
		//$ut=>array('parco/view/'.$an),
		//ucfirst(strtolower($sez))=>array($sez.'/view/'.$idsez),
		$targa,
		'Nuovo Allegato',
	);

} elseif ($sez=="clienti") {
		
	$cliente=Clienti::model()->findByPk($idsez);
	$cliente=$cliente->ragione_sociale;
	
	$oggetto="Nuova Fattura";
	$mitem="Fatture";
	
	$this->breadcrumbs=array(
		'Clienti'=>array('clienti/index'),
		$cliente,
		'Nuova Fattura',
	);
	
	$ut=$cliente;

} elseif ($sez=="contrattiTop") {
		
	$ut=ContrattiTop::model()->findByPk($idsez);
	$ut=$ut->utente;
	
	$this->breadcrumbs=array(
		'Contratti'=>array('contrattiTop/index'),
		$ut,
		'Nuovo Allegato',
	);
	
} elseif ($sez=="fatture") {
		
	$id=Fatture::model()->findByPk($idsez);
	$ut="Fattura ".$idsez;
	
	$this->breadcrumbs=array(
		'Fatture'=>array('fatture/index'),
		'Nuovo Allegato',
	);

} elseif ($sez=="cedolini") {
		
	$id=Fatture::model()->findByPk($idsez);
	$ut="Busta paga ".$idsez;
	
	$this->breadcrumbs=array(
		'Buste Paga'=>array('cedolini/index'),
		'Nuovo Allegato',
	);

} else {
	$an=$_GET['an'];
	$ut=$_GET['ut'];	

	$this->breadcrumbs=array(
		'Anagrafica'=>array('anagrafica/index'),
		$ut=>array('anagrafica/view/'.$an),
		ucfirst(strtolower($sez))=>array($sez.'/view/'.$idsez),
		'Nuovo Allegato',
	);

}


$this->menu=array(
	array('label'=>$mitem, 'url'=>array('index')),
	//array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1><?php echo $oggetto; ?> - <?php echo $ut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>