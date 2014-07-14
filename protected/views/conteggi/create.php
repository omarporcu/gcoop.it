<?php
/* @var $this ConteggiController */
/* @var $model Conteggi */

$ut=$_GET['ut'];
$an=$_GET['an'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	'Nuovo Conteggio',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
);
?>

<h1>Nuovo Conteggio per <?php echo $ut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>