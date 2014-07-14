<?php
/* @var $this SediController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sedis',
);

$this->menu=array(
	array('label'=>'Create Sedi', 'url'=>array('create')),
	array('label'=>'Manage Sedi', 'url'=>array('admin')),
);
?>

<h1>Sedis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
