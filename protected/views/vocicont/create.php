<?php
/* @var $this VocicontController */
/* @var $model Vocicont */

$id_cont=$_GET['id_cont'];

$this->breadcrumbs=array(
	'Voci Conteggio'=>array('index'),
	'Nuova',
);

$this->menu=array(
	array('label'=>'Conteggio Mensile', 'url'=>array('conteggi/view/'.$id_cont)),
	//array('label'=>'Manage Vocicont', 'url'=>array('admin')),
);
?>

<h1>Nuova Voce</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>