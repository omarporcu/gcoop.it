<?php
/* @var $this ContrattiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contratti',
);

$this->menu=array(
	array('label'=>'Nuovo Contratto', 'url'=>array('create')),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Contratto</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
