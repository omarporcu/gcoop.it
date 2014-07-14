<?php
/* @var $this MezziController */
/* @var $model Mezzi */

$ut=$_GET['ut'];
$an=$_GET['an'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	'Nuovo Mezzo',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	//array('label'=>'Manage Mezzi', 'url'=>array('admin')),
);
?>

<h1>Nuovo Mezzo per <?php echo $ut; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>