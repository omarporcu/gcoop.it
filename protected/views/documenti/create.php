<?php
/* @var $this DocumentiController */
/* @var $model Documenti */

$ut=$_GET['ut'];
$an=$_GET['an'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	'Nuovo Documento',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	//array('label'=>'Manage Documenti', 'url'=>array('admin')),
);
?>

<h1>Nuovo Documento per <?php echo $ut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>