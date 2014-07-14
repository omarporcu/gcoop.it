<?php
/* @var $this ContrattiController */
/* @var $model Contratti */

$an=$model->id_utente;
$ut=$model->utente;
//$ut=$model->anagrafica->cognome.' '.$model->anagrafica->nome;

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$ut=>array('anagrafica/view/'.$an),
	'Contratti',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	array('label'=>'Nuovo Contratto', 'url'=>array('create?an='.$an.'&ut='.$ut.'&soc='.$model->societa)),
	array('label'=>'Modifica Contratto', 'url'=>array('update?id='.$model->id.'&an='.$an.'&ut='.$ut.'&soc='.$model->societa)),
	array('label'=>'Elimina Contratto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'an'=>$an),'confirm'=>'Sicuro di voler eliminare il Contratto?')),
	//array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Contratto <?php echo $model->tipologia.' n. '.$model->ncontratto; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
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
