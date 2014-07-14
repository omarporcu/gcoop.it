<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */

$this->breadcrumbs=array(
	'Prestiti'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Prestiti', 'url'=>array('index')),
	array('label'=>'Nuovo Prestito', 'url'=>array('create')),
	array('label'=>'Modifica Prestito', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Prestito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Prestito #<?php echo $model->id; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'causale',
		'totale',
		'n_rate',
		'scadenza',
		'data',
		'societa',
		'anagrafica',
		'altro',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Rate - Prestito #<?php echo $model->id; ?>
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('rateprestito/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'rate-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Documento',Yii::app()->baseUrl.'/documenti/create?an='.$model->id.'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>'',
		'dataProvider'=>Rateprestito::model()->searchByPrestiti($model->id),
		//'filter'=>Mezzi::model(),
	'columns'=>array(
		//'id',
		//'prestito',
		//'societa',
		//'mezzo',
		'rata',
		array(
			'name'=>'data',
			'header'=>'Data Scadenza',
		),
		array(
			'name'=>'pagata',
			'htmlOptions'=>array('style'=>'font-weight: bold'),
		),
		array(
			'name'=>'importo',
			'footer'=>Rateprestito::model()->getTotals($model->id),
		),
		//'note',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>

