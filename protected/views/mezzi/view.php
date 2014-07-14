<?php
/* @var $this MezziController */
/* @var $model Mezzi */

$an=$model->assegnatario;
$ut=$model->utente;

$this->breadcrumbs=array(
	'Anagrafica'=>array('anagrafica/index'),
	$an=>array('anagrafica/view/'.$an),
	'Mezzi',
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('anagrafica/view/'.$an)),
	array('label'=>'Nuovo Mezzo', 'url'=>array('create?an='.$an.'&ut='.$ut)),
	array('label'=>'Modifica Mezzo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Mezzo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id,'an'=>$an),'confirm'=>'Sicuro di voler eliminare il Mezzo?')),
	//array('label'=>'Manage Mezzi', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Mezzo - Targa: <?php echo $model->targa; ?></h1>

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
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
