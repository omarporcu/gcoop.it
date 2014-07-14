<?php
/* @var $this AllegatiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Allegati',
);

$this->menu=array(
	array('label'=>'Nuovo Allegato', 'url'=>array('create')),
	//array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Allegati</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
