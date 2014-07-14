<?php
/* @var $this FornitoriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fornitori',
);

$this->menu=array(
	array('label'=>'Nuovo Fornitore', 'url'=>array('create')),
	//array('label'=>'Manage Fornitori', 'url'=>array('admin')),
);
?>

<h1>Fornitori</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
