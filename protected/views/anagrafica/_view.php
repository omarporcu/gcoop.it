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
				<?php echo CHtml::encode($model->nome); ?>
			</td>
			<td align="bottom">
				<?php echo $form->labelEx($model,'cognome'); ?>
				<?php echo CHtml::encode($model->cognome); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data_nascita'); ?>
				<?php echo CHtml::encode($model->data_nascita); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'c_fiscale'); ?>
				<?php echo CHtml::encode($model->c_fiscale); ?>
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
				<?php echo CHtml::encode($model->id_societa); ?>
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
				<?php echo CHtml::encode($model->comune_nascita); ?> 
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_nascita'); ?>
				<?php echo CHtml::encode($model->regione_nascita); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_nascita'); ?>
				<?php echo CHtml::encode($model->provincia_nascita); ?> 
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
				<?php echo CHtml::encode($model->comune_residenza); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'indirizzo_residenza'); ?>
				<?php echo CHtml::encode($model->indirizzo_residenza); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_residenza'); ?>
				<?php echo CHtml::encode($model->regione_residenza); ?> 
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_residenza'); ?>
				<?php echo CHtml::encode($model->provincia_residenza); ?> 
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
				<?php echo CHtml::encode($model->telefono); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'fax'); ?>
				<?php echo CHtml::encode($model->fax); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'cellulare'); ?>
				<?php echo CHtml::encode($model->cellulare); ?>
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
				<?php echo CHtml::encode($model->email); ?>
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
				<?php echo CHtml::encode($model->iban); ?>
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