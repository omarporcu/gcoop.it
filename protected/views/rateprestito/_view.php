<?php
/* @var $this RateprestitoController */
/* @var $model Rateprestito */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rateprestito-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

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
				<?php echo $form->labelEx($model,'prestito'); ?>
				<?php echo CHtml::encode($model->prestito); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo CHtml::encode($model->societa); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo CHtml::encode($model->anagrafica); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Rata
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'rata'); ?>
				<?php echo CHtml::encode($model->rata); ?>
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
			<td>
				<?php echo $form->labelEx($model,'pagata'); ?>
				<?php echo CHtml::encode($model->pagata); ?>
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