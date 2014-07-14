<?php
/* @var $this SediController */
/* @var $model Sedi */

$soc=$_GET['soc'];
$societa=$_GET['societa'];

$this->breadcrumbs=array(
	'Società'=>array('societa/index'),
	$societa=>array('societa/view/'.$soc),
	'Nuova Sede',
);

$this->menu=array(
	array('label'=>'Società', 'url'=>array('societa/view/'.$soc)),
);
?>

<h1>Nuova Sede per <?php echo $societa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>