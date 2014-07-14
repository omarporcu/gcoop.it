<?php
/* @var $this ParcoController */
/* @var $model Parco */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modello'); ?>
		<?php echo $form->textField($model,'modello',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prezzo'); ?>
		<?php echo $form->textField($model,'prezzo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rata'); ?>
		<?php echo $form->textField($model,'rata',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'targa'); ?>
		<?php echo $form->textField($model,'targa',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'immatricolazione'); ?>
		<?php echo $form->textField($model,'immatricolazione'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assicurazione'); ?>
		<?php echo $form->textField($model,'assicurazione'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scadenza_assicurazione'); ?>
		<?php echo $form->textField($model,'scadenza_assicurazione'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scadenza_bollo'); ?>
		<?php echo $form->textField($model,'scadenza_bollo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proprietario'); ?>
		<?php echo $form->textField($model,'proprietario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utente'); ?>
		<?php echo $form->textField($model,'utente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->