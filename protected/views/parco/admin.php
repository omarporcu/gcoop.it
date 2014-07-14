<?php
/* @var $this ParcoController */
/* @var $model Parco */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'List Parco', 'url'=>array('index')),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#parco-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Mezzi</h1>

<?php echo CHtml::link('Ricerca Avanzata','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('parco/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'parco-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'targa',
		'marca',
		'modello',
		'utente',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
