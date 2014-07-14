<?php
/* @var $this AnagraficaController */
/* @var $model Anagrafica */

$this->breadcrumbs=array(
	'Anagrafica'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'Anagrafica', 'url'=>array('index')),
	array('label'=>'Nuova Anagrafica', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#anagrafica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Anagrafica</h1>

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
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('anagrafica/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'anagrafica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'cognome',
		'data_nascita',
		//'regione_nascita',
		//'provincia_nascita',
		//'comune_nascita',
		//'c_fiscale',
		//'regione_residenza',
		//'provincia_residenza',
		'comune_residenza',
		//'indirizzo_residenza',
		'email',
		'telefono',
		//'fax',
		'cellulare',
		//'iban',
		//'note',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
