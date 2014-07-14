<?php
/* @var $this FornitoriController */
/* @var $model Fornitori */

$this->breadcrumbs=array(
	'Fornitori'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'List Fornitori', 'url'=>array('index')),
	array('label'=>'Nuovo Fornitore', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fornitori-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Fornitori</h1>

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
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('fornitori/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'fornitori-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'logo',
		'ragione_sociale',
		//'tipologia',
		'amministratore',
		//'regione',
		//'provincia',
		'comune',
		//'cap',
		//'indirizzo',
		'gruppo',
		'email',
		'telefono',
		'fax',
		//'p_iva',
		//'c_fiscale',
		//'numero_iscrcc',
		//'regione_iscrcc',
		//'provincia_iscrcc',
		//'comune_iscrcc',
		//'data_iscrcc',
		//'note',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
