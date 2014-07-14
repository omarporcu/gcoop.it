<?php
/* @var $this SocietaController */
/* @var $model Societa */

$soc=$model->id;
$societa=$model->ragione_sociale;

$this->breadcrumbs=array(
	'Società'=>array('index'),
	$model->ragione_sociale,
);

$this->menu=array(
	array('label'=>'Società', 'url'=>array('index')),
	array('label'=>'Nuova Società', 'url'=>array('create')),
	array('label'=>'Modifica Società', 'url'=>array('update', 'id'=>$soc)),
	array('label'=>'Elimina Società', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$soc),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Societa', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Società <?php echo $societa; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ragione_sociale',
		'tipologia',
		'logo',
		'amministratore',
		'sede',
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
						Altre Sedi
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('sedi/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'sedi-grid',
	'summaryText'=>CHtml::link('[+] Aggiungi Sedi',Yii::app()->baseUrl.'/sedi/create?soc='.$soc.'&societa='.$societa,array('class'=>'')),
	'dataProvider'=>Sedi::model()->searchBySocieta($_GET['id']),
	//'filter'=>Mezzi::model(),
	'columns'=>array(
		//'id',
		//'id_societa',
		//'regione',
		//'provincia',
		'comune',
		'indirizzo',
		'cap',
		'telefono',
		//'note',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Anagrafiche Associate
					</div>
				</div>
			</td>
		</tr>
	</table>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('anagrafica/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'anagrafica-grid',
	'summaryText'=>CHtml::link('[+] Aggiungi Anagrafica',Yii::app()->baseUrl.'/anagrafica/create',array('class'=>'')),
	'summaryText'=>'',
	'dataProvider'=>Anagrafica::model()->searchBySocieta("$societa"),
	//'filter'=>Anagrafica::model()->search(),
	'columns'=>array(
		//'id',
		//'nome',
		'cognome',
		'nome',
		//'data_nascita',
		//'regione_nascita',
		//'provincia_nascita',
		//'comune_nascita',
		'c_fiscale',
		//'regione_residenza',
		//'provincia_residenza',
		'comune_residenza',
		//'indirizzo_residenza',
		//'email',
		'telefono',
		//'fax',
		'cellulare',
		//'iban',
		//'note',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
