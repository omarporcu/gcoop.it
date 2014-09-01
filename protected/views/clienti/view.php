<?php
/* @var $this ClientiController */
/* @var $model Clienti */

$this->breadcrumbs=array(
	'Clienti'=>array('index'),
	$model->ragione_sociale,
);

$this->menu=array(
	array('label'=>'Clienti', 'url'=>array('index')),
	array('label'=>'Nuovo Cliente', 'url'=>array('create')),
	array('label'=>'Modifica Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>false,'itemOptions'=>array('class'=>'divider')),
	array('label'=>'Aggiungi Fattura', 'url'=>array('/allegati/create?sez=clienti&idsez='.$_GET['id'])),
	//array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Cliente <?php echo $model->ragione_sociale; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ragione_sociale',
		'tipologia',
		'logo',
		'amministratore',
		'regione',
		'provincia',
		'comune',
		'cap',
		'indirizzo',
		'gruppo',
		'email',
		'telefono',
		'fax',
		'p_iva',
		'c_fiscale',
		'numero_iscrcc',
		'regione_iscrcc',
		'provincia_iscrcc',
		'comune_iscrcc',
		'data_iscrcc',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Fatture
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	//'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('allegati/view?sez=documenti&idsez='.$model->id, array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('../allegati/view?sez=clienti&idsez='.$model->id) . "' + $.fn.yiiGridView.getSelection(id);}",
		'id'=>'allegati-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Allegato','../allegati/create?an='.$_GET['id'].'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Fattura','../allegati/create?sez=clienti&idsez='.$_GET['id'],array('class'=>'')),
	'dataProvider'=>Allegati::model()->searchByClienti('"clienti"',$_GET['id']),
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
