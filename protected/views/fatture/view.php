<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fattura'=>array('index'),
	$model->numero_fattura,
);

$this->menu=array(
	array('label'=>'Fatture', 'url'=>array('index')),
	array('label'=>'Nuova Fattura', 'url'=>array('create')),
	array('label'=>'Modifica Fattura', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Fattura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Dettagli Fattura <?php echo $model->numero_fattura; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero_fattura',
		'tipo',
		'societa',
		'cliente',
		'causale',
		'descrizione',
		'imponibile',
		'data',
		'data_accredito',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Allegati
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	//'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('allegati/view?sez=documenti&idsez='.$model->id, array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('./allegati/view?idsez='.$model->id.'&sez=fatture&id=') . "' + $.fn.yiiGridView.getSelection(id);}",
		'id'=>'allegati-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?an='.$_GET['id'].'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?idsez='.$_GET['id'].'&sez=fatture&id='.$model->id,array('class'=>'')),
	'dataProvider'=>Allegati::model()->searchByMezzo('"fatture"',$_GET['id']),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		//'sezione',
		//'idsezione',
		'allegato',
		'nome',
		'descrizione',
		'data_inserimento',
		//'privato',
		//'visibile',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>

