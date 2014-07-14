<?php
/* @var $this SocietaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Società',
);

$this->menu=array(
	array('label'=>'Crea Società', 'url'=>array('create')),
	//array('label'=>'Manage Societa', 'url'=>array('admin')),
);
?>

<h1>Società</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
