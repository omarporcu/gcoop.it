<?php
/* @var $this Conteggi_mainController */
/* @var $model Conteggi_main */

$this->breadcrumbs=array(
	'Genera Conteggio',
);

$this->menu=array(
	array('label'=>'Home', 'url'=>array('/scadenze/index')),
);
?>

<h1>Nuovo Conteggio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>