<?php
/* @var $this AllegatiController */
/* @var $model Allegati */
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
		<?php echo $form->label($model,'sezione'); ?>
		<?php echo $form->textField($model,'sezione',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idsezione'); ?>
		<?php echo $form->textField($model,'idsezione'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allegato'); ?>
		<?php echo $form->textField($model,'allegato',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descrizione'); ?>
		<?php echo $form->textField($model,'descrizione',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_inserimento'); ?>
		<?php echo $form->textField($model,'data_inserimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privato'); ?>
		<?php echo $form->textField($model,'privato',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visibile'); ?>
		<?php echo $form->textField($model,'visibile',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->