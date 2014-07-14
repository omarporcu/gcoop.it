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
				<?php echo CHtml::encode($model->numero_fattura); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo CHtml::encode($model->data); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tipo'); ?>
				<?php echo CHtml::encode($model->tipo); ?>
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
				<?php echo CHtml::encode($model->societa); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'cliente'); ?>
				<?php echo CHtml::encode($model->cliente); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo CHtml::encode($model->causale); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'descrizione'); ?>
				<?php echo CHtml::encode($model->descrizione); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'imponibile'); ?>
				<?php echo CHtml::encode($model->imponibile); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'iva'); ?>
				<?php echo CHtml::encode($model->iva); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tot'); ?>
				<?php echo CHtml::encode($model->tot); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_accredito'); ?>
				<?php echo CHtml::encode($model->data_accredito); ?>
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
				<?php echo CHtml::encode($model->note); ?>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->