<?php
/* @var $this DocumentiController */
/* @var $model Documenti */
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
		<?php echo $form->label($model,'id_anagrafica'); ?>
		<?php echo $form->textField($model,'id_anagrafica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipologia'); ?>
		<?php echo $form->textField($model,'tipologia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_rilascio'); ?>
		<?php echo $form->textField($model,'data_rilascio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ente_rilascio'); ?>
		<?php echo $form->textField($model,'ente_rilascio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_documento'); ?>
		<?php echo $form->textField($model,'numero_documento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scadenza'); ?>
		<?php echo $form->textField($model,'scadenza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->