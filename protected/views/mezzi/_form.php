<?php
/* @var $this MezziController */
/* @var $model Mezzi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mezzi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'proprietario',array('size'=>45,'maxlength'=>45,'value'=>$_GET['an'])); ?>
	<?php echo $form->error($model,'proprietario'); ?>

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
				<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'marca'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'modello'); ?>
				<?php echo $form->textField($model,'modello',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'modello'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'targa'); ?>
				<?php echo $form->textField($model,'targa',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'targa'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'immatricolazione'); ?>
				<?php echo $form->textField($model,'immatricolazione', array('placeholder'=>'gg/mm/aaaa')); ?>
				<?php echo $form->error($model,'immatricolazione'); ?>
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
				<?php echo $form->textField($model,'proprietario',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'proprietario'); ?>
			<td>
				<?php echo $form->labelEx($model,'assegnatario'); ?>
				<?php echo $form->textField($model,'assegnatario',array('size'=>45,'maxlength'=>45,'value'=>$_GET['ut'])); ?>
				<?php echo $form->error($model,'assegnatario'); ?>
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
				<?php echo $form->textField($model,'prezzo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'prezzo'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'rata'); ?>
				<?php echo $form->textField($model,'rata',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'rata'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'assicurazione'); ?>
				<?php echo $form->textField($model,'assicurazione',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'assicurazione'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'scadenza_assicurazione'); ?>
				<?php echo $form->textField($model,'scadenza_assicurazione',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'scadenza_assicurazione'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'scadenza_bollo'); ?>
				<?php echo $form->textField($model,'scadenza_bollo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'scadenza_bollo'); ?>
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
				<?php echo $form->error($model,'note'); ?>
			</td>
		</tr>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->