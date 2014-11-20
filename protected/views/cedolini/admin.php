<?php
/* @var $this CedoliniController */
/* @var $model Cedolini */

$this->breadcrumbs=array(
	'Cedolini'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'List Cedolini', 'url'=>array('index')),
	array('label'=>'Nuovo Cedolino', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cedolini-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Cedolini</h1>

<!--p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p-->

<!--?php echo CHtml::link('Ricerca Avanzata','#',array('class'=>'search-button')); ?-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('cedolini/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'cedolini-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'anagrafica',
		'mese',
		'anno',
		'g_lavorati',
		'importo',
		/*
		'data',
		'note',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
