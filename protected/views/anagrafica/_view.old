<?php
/* @var $this AnagraficaController */
/* @var $model Anagrafica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anagrafica-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Personali
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'nome'); ?>
				<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td align="bottom">
				<?php echo $form->labelEx($model,'cognome'); ?>
				<?php echo $form->textField($model,'cognome',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data_nascita'); ?>
				<?php echo $form->textField($model,'data_nascita'); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'c_fiscale'); ?>
				<?php echo $form->textField($model,'c_fiscale',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Società
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'id_societa'); ?>
				<?php echo $form->textField($model,'id_societa',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Luogo di Nascita
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_nascita'); ?>
				<?php echo $form->textField($model,'comune_nascita'); ?> 
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_nascita'); ?>
				<?php echo $form->textField($model,'regione_nascita'); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_nascita'); ?>
				<?php echo $form->textField($model,'provincia_nascita'); ?> 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Residenza
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_residenza'); ?>
				<?php echo $form->textField($model,'comune_residenza'); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'indirizzo_residenza'); ?>
				<?php echo $form->textField($model,'indirizzo_residenza',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_residenza'); ?>
				<?php echo $form->textField($model,'regione_residenza'); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_residenza'); ?>
				<?php echo $form->textField($model,'provincia_residenza'); ?> 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Recapiti telefonici
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'fax'); ?>
				<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'cellulare'); ?>
				<?php echo $form->textField($model,'cellulare',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Posta Elettronica
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Bancari
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'iban'); ?>
				<?php echo $form->textField($model,'iban',array('size'=>45,'maxlength'=>45)); ?>
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