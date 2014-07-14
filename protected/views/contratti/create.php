<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$ut=$_GET['ut'];
$an=$_GET['an'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	'Nuovo Contratto',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Nuovo Contratto per <?php echo $ut; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>