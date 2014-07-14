<?php
/* @var $this PrestitiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prestiti',
);

$this->menu=array(
	array('label'=>'Nuovo Prestito', 'url'=>array('create')),
	//array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Prestiti</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
