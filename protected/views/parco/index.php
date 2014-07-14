<?php
/* @var $this ParcoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parcos',
);

$this->menu=array(
	array('label'=>'Create Parco', 'url'=>array('create')),
	array('label'=>'Manage Parco', 'url'=>array('admin')),
);
?>

<h1>Parcos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
