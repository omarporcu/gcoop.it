<?php
/* @var $this RateprestitoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rate',
);

$this->menu=array(
	array('label'=>'Nuova Rata', 'url'=>array('create')),
	//array('label'=>'Manage Rateprestito', 'url'=>array('admin')),
);
?>

<h1>Rate</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
