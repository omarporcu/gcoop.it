<?php
/* @var $this ContrattiController */
/* @var $model Contratti */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ncontratto'); ?>
		<?php echo $form->textField($model,'ncontratto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utente'); ?>
		<?php echo $form->textField($model,'utente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'societa'); ?>
		<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipologia'); ?>
		<?php echo $form->textField($model,'tipologia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_inizio'); ?>
		<?php echo $form->textField($model,'data_inizio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_fine'); ?>
		<?php echo $form->textField($model,'data_fine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruolo'); ?>
		<?php echo $form->textField($model,'ruolo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provvigione'); ?>
		<?php echo $form->textField($model,'provvigione',array('size'=>45,'maxlength'=>45)); ?>
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