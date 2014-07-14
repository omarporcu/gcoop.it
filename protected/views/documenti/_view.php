<?php
/* @var $this DocumentiController */
/* @var $model Documenti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documenti-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettagli Documento
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'numero_documento'); ?>
				<?php echo CHtml::encode($model->numero_documento); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'ente_rilascio'); ?>
				<?php echo CHtml::encode($model->ente_rilascio); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_rilascio'); ?>
				<?php echo CHtml::encode($model->data_rilascio); ?> 
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'scadenza'); ?>
				<?php echo CHtml::encode($model->scadenza); ?> 
			</td>
			<td></td>
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