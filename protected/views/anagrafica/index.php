<?php
/* @var $this AnagraficaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anagrafica',
);

$this->menu=array(
	array('label'=>'Nuova Anagrafica', 'url'=>array('create')),
	//array('label'=>'Manage Anagrafica', 'url'=>array('admin')),
);
?>

<h1>Anagrafica</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
