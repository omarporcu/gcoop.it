<?php
/* @var $this ClientiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clienti',
);

$this->menu=array(
	array('label'=>'Crea Cliente', 'url'=>array('create')),
	//array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Clienti</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
