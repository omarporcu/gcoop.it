<?php
/* @var $this Conteggi_mainController */
/* @var $model Conteggi_main */

$this->breadcrumbs=array(
	'Genera Conteggio',
	$model->anagrafica,
	$model->anno,
	$model->mese,
);

$an=0;
$ut=0;

$this->menu=array(
	array('label'=>'Home', 'url'=>array('/site/index')),
	array('label'=>'Modifica Conteggio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Stampa Conteggio', 'url'=>array('print', 'id_conteggio'=>$model->id)),
	
);
?>

<h1>Inserisci Dettaglio Conteggio <?php echo $model->anagrafica; ?><br><?php echo $model->mese; ?>/<?php echo $model->anno; ?></h1>

<?php $this->renderPartial('_view', array('model'=>$model)); ?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'enableAjaxValidation'=>true,
)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	//'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('vocicont/update?an='.$an.'&ut='.$ut.'&id_cont='.$model->id.'&id=') . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'vocicont-grid',
	//'summaryText'=>CHtml::link('[+] Aggiungi Conteggio',Yii::app()->baseUrl.'/vocicont/create?an='.$model->id.'&ut='.$nomecognome,array('class'=>'')),
	'summaryText'=>CHtml::link('[+] Aggiungi Voce',Yii::app()->baseUrl.'/vocicont/create?id_cont='.$model->id,array('class'=>'')),
	'dataProvider'=>Vocicont::model()->searchByConteggio($model->id),
	//'filter'=>Vocicont::model(),
	'columns'=>array(
		'tipologia',
		array(
			'name'=>'causale',
			'type'=>'raw',
			'value'=>'CHtml::textField("causale[$data->id]",$data->causale,array("style"=>"width:100px;"))',
			'footer'=>'Totale',
		),
		array(
			'name'=>'importo',
			'type'=>'raw',
			'value'=>'CHtml::textField("importo[$data->id]",$data->importo,array("style"=>"width:100px;"))',
			'footer'=>Vocicont::model()->getTotals($model->id),
		),
		/*array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
		),*/
	),
)); ?>
<script>
	function reloadGrid(data) {
	    $.fn.yiiGridView.update('vocicont-grid');
	}
</script>
<?php echo CHtml::ajaxSubmitButton('Aggiorna',array('vocicont/ajaxupdate'), array('success'=>'reloadGrid')); ?>
<?php $this->endWidget(); ?>
