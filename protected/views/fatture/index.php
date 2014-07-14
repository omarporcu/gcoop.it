<?php
/* @var $this FattureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fatture',
);

$this->menu=array(
	array('label'=>'Nuova Fattura', 'url'=>array('create')),
	//array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Fatture</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
