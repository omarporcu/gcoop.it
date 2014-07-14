<?php
/* @var $this ConteggiController */
/* @var $model Conteggi */
?>

<h1>Conteggio <?php echo CHtml::encode($model->mese)." ".CHtml::encode($model->anno)." - ".CHtml::encode($model->anagrafica); ?></h1>

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

<?php echo $this->renderPartial('_viewPrint', array('model'=>$model)); ?>

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
	//'ajaxUpdate'=>'ajaxContent',
	//'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('vocicont/update?an='.$an.'&ut='.$ut.'&id_cont='.$model->id.'&id=') . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'vocicont-grid',
	'summaryText'=>'',
	'enableSorting'=>false,
	'skin'=>false,
	//'summaryText'=>CHtml::link('[+] Aggiungi Voce',Yii::app()->baseUrl.'/vocicont/create?id_cont='.$model->id,array('class'=>'')),
	'dataProvider'=>Vocicont::model()->searchByConteggio($model->id),
	//'filter'=>Vocicont::model(),
	'columns'=>array(
		'tipologia',
		array(
			'name'=>'causale',
			'footer'=>'Totale:',
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
