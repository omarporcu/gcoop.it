<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fatture'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'Fatture', 'url'=>array('index')),
	array('label'=>'Nuova Fattura', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fatture-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Fatture</h1>

<!--p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p-->

<?php echo CHtml::link('Ricerca Avanzata','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('fatture/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'fatture-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'numero_fattura',
		'tipo',
		'societa',
		'cliente',
		'causale',
		//'descrizione',
		'imponibile',
		'iva',
		'tot',
		'data',
		'data_accredito',
		//'note',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
