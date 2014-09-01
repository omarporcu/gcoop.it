<?php
/* @var $this Conteggi_mainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conteggi Mains',
);

$this->menu=array(
	array('label'=>'Create Conteggi_main', 'url'=>array('create')),
	array('label'=>'Manage Conteggi_main', 'url'=>array('admin')),
);
?>

<h1>Conteggi Mains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
