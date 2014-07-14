<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestiti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Prestito
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo $form->textField($model,'causale',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'totale'); ?>
				<?php echo $form->textField($model,'totale',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'n_rate'); ?>
				<?php echo $form->textField($model,'n_rate',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo $form->textField($model,'data'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'scadenza'); ?>
				<?php echo $form->textField($model,'scadenza'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Amministrazione
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo $form->textField($model,'anagrafica',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Note
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'altro'); ?>
				<?php echo $form->textArea($model,'altro',array('rows'=>6, 'cols'=>50)); ?>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->