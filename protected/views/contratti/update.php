<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$an=$_GET['an'];
$ut=$_GET['ut'];
$soc=$_GET['soc'];

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	'Contratti',
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('index')),
	array('label'=>'Nuovo Contratto', 'url'=>array('create?an='.$an.'&ut='.$ut.'&soc='.$model->societa)),
	array('label'=>'Visualizza Contratto', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Modifica Contratto <?php echo $model->ncontratto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>