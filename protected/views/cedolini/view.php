<?php
/* @var $this CedoliniController */
/* @var $model Cedolini */

$this->breadcrumbs=array(
	'Cedolini'=>array('index'),
	$model->mese."/".$model->anno." - ".$model->anagrafica,
);

$this->menu=array(
	array('label'=>'Elenco Cedolini', 'url'=>array('admin')),
	array('label'=>'Nuovo Cedolino', 'url'=>array('index')),
	array('label'=>'Modifica Cedolino', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Cedolino', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Cedolini', 'url'=>array('admin')),
);
?>

<h1>Cedolino <?php echo $model->mese."/".$model->anno." - ".$model->anagrafica; ?></h1>

<?php $this->renderPartial('_view', array('model'=>$model)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Busta Paga
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	//'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('allegati/view?sez=documenti&idsez='.$model->id, array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('./allegati/view?idsez='.$model->id.'&sez=cedolini&id=') . "' + $.fn.yiiGridView.getSelection(id);}",
		'id'=>'allegati-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?an='.$_GET['id'].'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?idsez='.$_GET['id'].'&sez=cedolini&id='.$model->id,array('class'=>'')),
	'dataProvider'=>Allegati::model()->searchByMezzo('"cedolini"',$_GET['id']),
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

