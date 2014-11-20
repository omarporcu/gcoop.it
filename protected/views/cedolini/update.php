<?php
/* @var $this CedoliniController */
/* @var $model Cedolini */

$this->breadcrumbs=array(
	'Cedolini'=>array('index'),
	'Aggiorna',
	$model->mese."/".$model->anno." - ".$model->anagrafica,
);

$this->menu=array(
	array('label'=>'Elenco Cedolini', 'url'=>array('admin')),
	array('label'=>'Nuovo Cedolino', 'url'=>array('index')),
);
?>

<h1>Aggiona Cedolino <?php echo $model->mese."/".$model->anno." - ".$model->anagrafica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>