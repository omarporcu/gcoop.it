<?php
/* @var $this DocumentiController */
/* @var $model Documenti */

$an=$model->id_anagrafica;
$ut=$model->anagrafica->cognome.' '.$model->anagrafica->nome;

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	'Documenti',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	array('label'=>'Nuovo Documento', 'url'=>array('create?an='.$an.'&ut='.$ut)),
	array('label'=>'Modifica Documento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'an'=>$an),'confirm'=>'Sicuro di voler eliminare il documento?')),
	//array('label'=>'Manage Documenti', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->tipo->nome.' - '.$model->anagrafica->cognome.' '.$model->anagrafica->nome; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_anagrafica',
		'tipologia',
		'data_rilascio',
		'ente_rilascio',
		'numero_documento',
		'scadenza',
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
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('allegati/view?an='.$an.'&sez=documenti&ut='.$ut.'&idsez='.$model->id.'&id=') . "' + $.fn.yiiGridView.getSelection(id);}",
		'id'=>'allegati-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?an='.$_GET['id'].'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?idsez='.$_GET['id'].'&sez=documenti&an='.$an.'&ut='.$ut,array('class'=>'')),
	'dataProvider'=>Allegati::model()->searchByDocumenti('"documenti"',$_GET['id']),
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
