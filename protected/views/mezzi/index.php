<?php
/* @var $this MezziController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mezzi',
);

$this->menu=array(
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
	//array('label'=>'Manage Mezzi', 'url'=>array('admin')),
);
?>

<h1>Mezzi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
