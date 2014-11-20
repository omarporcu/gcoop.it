<?php
/* @var $this CedoliniController */
/* @var $data Cedolini */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cedolini-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Anagrafica
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo CHtml::encode($model->anagrafica); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo CHtml::encode($model->societa); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Cedolino
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'mese'); ?>
				<?php echo CHtml::encode($model->mese); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anno'); ?>
				<?php echo CHtml::encode($model->mese); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'g_lavorati'); ?>
				<?php echo CHtml::encode($model->g_lavorati); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'importo'); ?>
				<?php echo CHtml::encode($model->importo); ?>
			</td>			
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo CHtml::encode($model->data); ?>
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
