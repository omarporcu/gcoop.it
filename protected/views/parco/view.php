<?php
/* @var $this ParcoController */
/* @var $model Parco */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	$model->targa,
);

$this->menu=array(
	array('label'=>'Mezzi', 'url'=>array('index')),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create')),
	array('label'=>'Modifica Mezzo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Mezzo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Sei sicuro di voler eliminare il mezzo?')),
	//array('label'=>'Manage Parco', 'url'=>array('admin')),
);
?>

<h1>Dettagli Mezzo - Targa: <?php echo $model->targa; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marca',
		'modello',
		'prezzo',
		'rata',
		'targa',
		'immatricolazione',
		'proprietario',
		'utente',
		'regione',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Documenti Associati
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	//'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('allegati/view?sez=documenti&idsez='.$model->id, array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('../allegati/view?an='.'&sez=documenti&ut='.'&idsez='.'&id=') . "' + $.fn.yiiGridView.getSelection(id);}",
		'id'=>'allegati-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?an='.$_GET['id'].'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?idsez='.$_GET['id'].'&sez=parco&targa='.$model->targa,array('class'=>'')),
	'dataProvider'=>Allegati::model()->searchByMezzo('"parco"',$_GET['id']),
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
