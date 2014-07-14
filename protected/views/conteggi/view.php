<?php
/* @var $this ConteggiController */
/* @var $model Conteggi */

$an=$model->anagrafica;
$ut=$model->id_utente;

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$an=>array('anagrafica/view/'.$ut),
	'Conteggi',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	array('label'=>'Nuovo Conteggio', 'url'=>array('create?an='.$an.'&ut='.$ut)),
	array('label'=>'Modifica Conteggio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Conteggio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'an'=>$an),'confirm'=>'Sicuro di voler eliminare il Conteggio?')),
	array('label'=>'Stampa', 'url'=>array('printview', 'id'=>$model->id)),
);
?>

<h1>Dettaglio Conteggio</h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'anagrafica',
		'targa',
		'mansione',
		'societa',
		'citta',
		'mese',
		'anno',
		'totale',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 1.4em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Voci Conteggio
					</div>
				</div>
			</td>
		</tr>
	</table>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('vocicont/update?an='.$an.'&ut='.$ut.'&id_cont='.$model->id.'&id=') . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'vocicont-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Conteggio',Yii::app()->baseUrl.'/vocicont/create?an='.$model->id.'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Voce',Yii::app()->baseUrl.'/vocicont/create?id_cont='.$model->id,array('class'=>'')),
	'dataProvider'=>Vocicont::model()->searchByConteggio($model->id),
	//'filter'=>Vocicont::model(),
	'columns'=>array(
		'tipologia',
		array(
			'name'=>'causale',
			'footer'=>'Totale',
		),
		array(
			'name'=>'importo',
			'footer'=>Vocicont::model()->getTotals($model->id),
		),
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
