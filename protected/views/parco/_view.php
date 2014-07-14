<?php
/* @var $this ParcoController */
/* @var $model Parco */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parco-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Mezzo
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'marca'); ?>
				<?php echo CHtml::encode($model->marca); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'modello'); ?>
				<?php echo CHtml::encode($model->modello); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'targa'); ?>
				<?php echo CHtml::encode($model->targa); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'immatricolazione'); ?>
				<?php echo CHtml::encode($model->immatricolazione); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Proprietario
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'proprietario'); ?>
				<?php echo CHtml::encode($model->proprietario); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'assegnatario'); ?>
				<?php echo CHtml::encode($model->assegnatario); ?>
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
					<?php echo $form->labelEx($model,'prezzo'); ?>
					<?php echo CHtml::encode($model->prezzo); ?>
				</td>
				<td>
					<?php echo $form->labelEx($model,'rata'); ?>
					<?php echo CHtml::encode($model->rata); ?>
				</td>
			</tr>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'assicurazione'); ?>
				<?php echo CHtml::encode($model->assicurazione); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'scadenza_assicurazione'); ?>
				<?php echo CHtml::encode($model->scadenza_assicurazione); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'scadenza_bollo'); ?>
				<?php echo CHtml::encode($model->scadenza_bollo); ?>
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