<?php
/* @var $this DocumentiController */
/* @var $model Documenti */

$this->breadcrumbs=array(
	'Documenti'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'List Documenti', 'url'=>array('index')),
	array('label'=>'Nuovo Documento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#documenti-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Documenti</h1>

<?php echo CHtml::link('Ricerca Avanzata','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'documenti-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'id_anagrafica',
		'tipo.nome',
		'numero_documento',
		'ente_rilascio',
		'data_rilascio',
		'scadenza',
		//'note',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
