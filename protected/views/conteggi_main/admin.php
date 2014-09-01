<?php
/* @var $this Conteggi_mainController */
/* @var $model Conteggi_main */

$this->breadcrumbs=array(
	'Conteggi Mains'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Conteggi_main', 'url'=>array('index')),
	array('label'=>'Create Conteggi_main', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#conteggi-main-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Conteggi Mains</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'conteggi-main-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_utente',
		'anagrafica',
		'targa',
		'mansione',
		'societa',
		'bonifico',
		/*
		'citta',
		'mese',
		'anno',
		'totale',
		'note',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
