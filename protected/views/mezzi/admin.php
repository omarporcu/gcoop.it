<?php
/* @var $this MezziController */
/* @var $model Mezzi */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'List Mezzi', 'url'=>array('index')),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mezzi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Mezzi</h1>

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
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('mezzi/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'mezzi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'proprietario',
		//'anagrafica.cognome',
		array(
	        'name'=>'proprietario',
	        'value'=>'$data->anagrafica->nome . " " . $data->anagrafica->cognome',
	        'header'=>'Proprietario',
		),
		'marca',
		'modello',
		'prezzo',
		'rata',
		'targa',
		/*
		'immatricolazione',
		'note',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
