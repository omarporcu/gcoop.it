<?php
/* @var $this DocumentiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documenti',
);

$this->menu=array(
	array('label'=>'Nuovo Documento', 'url'=>array('create')),
	//array('label'=>'Manage Documenti', 'url'=>array('admin')),
);
?>

<h1>Documenti</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
