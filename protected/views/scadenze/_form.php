<?php
/* @var $this ScadenzeController */
/* @var $model Scadenze */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scadenze-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modello'); ?>
		<?php echo $form->textField($model,'modello',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'modello'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prezzo'); ?>
		<?php echo $form->textField($model,'prezzo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'prezzo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rata'); ?>
		<?php echo $form->textField($model,'rata',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'rata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'targa'); ?>
		<?php echo $form->textField($model,'targa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'targa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'immatricolazione'); ?>
		<?php echo $form->textField($model,'immatricolazione'); ?>
		<?php echo $form->error($model,'immatricolazione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assicurazione'); ?>
		<?php echo $form->textField($model,'assicurazione',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'assicurazione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scadenza_assicurazione'); ?>
		<?php echo $form->textField($model,'scadenza_assicurazione'); ?>
		<?php echo $form->error($model,'scadenza_assicurazione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scadenza_bollo'); ?>
		<?php echo $form->textField($model,'scadenza_bollo'); ?>
		<?php echo $form->error($model,'scadenza_bollo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proprietario'); ?>
		<?php echo $form->textField($model,'proprietario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'proprietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assegnatario'); ?>
		<?php echo $form->textField($model,'assegnatario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'assegnatario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utente'); ?>
		<?php echo $form->textField($model,'utente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'utente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->