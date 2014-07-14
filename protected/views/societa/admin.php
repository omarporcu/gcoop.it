<?php
/* @var $this SocietaController */
/* @var $model Societa */

$this->breadcrumbs=array(
	'Società'=>array('index'),
	//'Manage',
);

$this->menu=array(
	//array('label'=>'List Societa', 'url'=>array('index')),
	array('label'=>'Nuova Società', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#societa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Società</h1>

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
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('societa/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'societa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'logo',
		'ragione_sociale',
		'p_iva',
		//'tipologia',
		'amministratore',
		'email',
		'gruppo',
		//'sede',
		'telefono',
		//'fax',
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