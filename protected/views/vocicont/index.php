<?php
/* @var $this VocicontController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vociconts',
);

$this->menu=array(
	array('label'=>'Create Vocicont', 'url'=>array('create')),
	array('label'=>'Manage Vocicont', 'url'=>array('admin')),
);
?>

<h1>Vociconts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
