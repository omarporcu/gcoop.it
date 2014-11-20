<?php
/* @var $this CedoliniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cedolini',
);

$this->menu=array(
	array('label'=>'Nuovo Cedolino', 'url'=>array('create')),
	array('label'=>'Gestisci Cedolini', 'url'=>array('admin')),
);
?>

<h1>Cedolini</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
