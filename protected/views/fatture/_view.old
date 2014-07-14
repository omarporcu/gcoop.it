<?php
/* @var $this FattureController */
/* @var $model Fatture */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fatture-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Fattura
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'numero_fattura'); ?>
				<?php echo $form->textField($model,'numero_fattura',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo $form->textField($model,'data'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tipo'); ?>
				<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettagli
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
				<?php echo $form->labelEx($model,'cliente'); ?>
				<?php echo $form->textField($model,'cliente',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo $form->textField($model,'causale',array('size'=>116,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'descrizione'); ?>
				<?php echo $form->textArea($model,'descrizione',array('rows'=>6, 'cols'=>83)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'imponibile'); ?>
				<?php echo $form->textField($model,'imponibile',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'iva'); ?>
				<?php echo $form->textField($model,'iva',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tot'); ?>
				<?php echo $form->textField($model,'tot',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_accredito'); ?>
				<?php echo $form->textField($model,'data_accredito', array('placeholder'=>'gg/mm/aaaa')); ?>
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
				<?php echo $form->labelEx($model,'note'); ?>
				<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->