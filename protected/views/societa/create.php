<?php
/* @var $this SocietaController */
/* @var $model Societa */

$this->breadcrumbs=array(
	'Società'=>array('index'),
	'Crea',
);

$this->menu=array(
	array('label'=>'Società', 'url'=>array('index')),
	//array('label'=>'Manage Societa', 'url'=>array('admin')),
);
?>

<h1>Nuova Società</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>