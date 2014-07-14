<?php
/* @var $this ConteggiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conteggis',
);

$this->menu=array(
	array('label'=>'Create Conteggi', 'url'=>array('create')),
	array('label'=>'Manage Conteggi', 'url'=>array('admin')),
);
?>

<h1>Conteggis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
