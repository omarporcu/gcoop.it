<?php
/* @var $this ContrattiTopController */
/* @var $model ContrattiTop */

$this->breadcrumbs=array(
	'Contratti'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Contratti', 'url'=>array('index')),
	array('label'=>'Nuovo Contratti', 'url'=>array('create')),
	array('label'=>'Modifica Contratto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Contratto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Sicuro di voler eliminare questo Contratto?')),
	//array('label'=>'Manage ContrattiTop', 'url'=>array('admin')),
);
?>

<h1>Dettagli Contratto #<?php echo $model->id; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ncontratto',
		'id_utente',
		'utente',
		'societa',
		'tipologia',
		'data_inizio',
		'data_fine',
		'ruolo',
		'provvigione',
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
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('../allegati/view?sez=contrattiTop&idsez='.$model->id) . "' + $.fn.yiiGridView.getSelection(id);}",
		'id'=>'allegati-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?an='.$_GET['id'].'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?sez=contrattiTop&idsez='.$_GET['id'],array('class'=>'')),
	'dataProvider'=>Allegati::model()->searchByContrattiTop('"contrattiTop"',$_GET['id']),
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

