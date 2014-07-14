<?php
/* @var $this SocietaController */
/* @var $model Societa */

$this->breadcrumbs=array(
	'Società'=>array('index'),
	$model->ragione_sociale=>array('view','id'=>$model->id),
	'Modifica',
);

$this->menu=array(
	array('label'=>'Società', 'url'=>array('index')),
	array('label'=>'Nuova Società', 'url'=>array('create')),
	array('label'=>'Visualizza Società', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Societa', 'url'=>array('admin')),
);
?>

<h1>Modifica Società <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>