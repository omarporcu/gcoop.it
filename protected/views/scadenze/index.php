<?php
/* @var $this ScadenzeController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	//array('label'=>'Create Scadenze', 'url'=>array('create')),
	//array('label'=>'Manage Scadenze', 'url'=>array('admin')),
);
?>

<h1>Prossime Scadenze</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'enableSorting'=>1,
	'sortableAttributes'=>array(
		'scadenza_assicurazione'=>'Assicurazione',
		'scadenza_bollo'=>'Bollo',
	)
)); ?>
