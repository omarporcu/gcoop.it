<?php
/* @var $this ConteggiController */
/* @var $model Conteggi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conteggi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Conteggio
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo CHtml::encode($model->anagrafica); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'mese'); ?>
				<?php echo CHtml::encode($model->mese); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anno'); ?>
				<?php echo CHtml::encode($model->anno); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'mansione'); ?>
				<?php echo CHtml::encode($model->mansione); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'targa'); ?>
				<?php echo CHtml::encode($model->targa); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo CHtml::encode($model->societa); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'citta'); ?>
				<?php echo CHtml::encode($model->citta); ?>
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