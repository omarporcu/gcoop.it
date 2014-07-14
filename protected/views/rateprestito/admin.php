<?php
/* @var $this RateprestitoController */
/* @var $model Rateprestito */

$this->breadcrumbs=array(
	'Rate'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Rateprestito', 'url'=>array('index')),
	array('label'=>'Nuova Rata', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rateprestito-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Rate</h1>

<?php echo CHtml::link('Ricerca Avanzata','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rateprestito-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'prestito',
		'societa',
		'anagrafica',
		'rata',
		'importo',
		'data',
		'pagata',
		'note',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
