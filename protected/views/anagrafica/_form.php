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

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

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
				<?php echo $form->error($model,'nome'); ?>
			</td>
			<td align="bottom">
				<?php echo $form->labelEx($model,'cognome'); ?>
				<?php echo $form->textField($model,'cognome',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'cognome'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data_nascita'); ?>
				<?php echo $form->textField($model,'data_nascita', array('placeholder'=>'gg/mm/aaaa')); ?> 
				<?php echo $form->error($model,'data_nascita'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'c_fiscale'); ?>
				<?php echo $form->textField($model,'c_fiscale',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'c_fiscale'); ?>
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
				<!--?php echo $form->textField($model,'proprietario',array('size'=>45,'maxlength'=>45)); ?-->
				<?php echo $form->dropDownList(
					$model, 
					'id_societa', 
					CHtml::listData(
						Societa::model()->findAll(), 'ragione_sociale', 'ragione_sociale'),
						array(
							'empty'=>'Seleziona Società',
							/*'ajax'=>array(
								'type'=>'POST', //request type
							)*/
						)
					);
				?>
				<?php echo $form->error($model,'id_societa'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Luogo di Nascita Autocomplete
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_nascita'); ?>
				<?php
					$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'model'=>$model,
						'attribute'=>'comune_nascita',
					    'htmlOptions'=>array(
					    	'placeholder'=>'Autocompleta Comune',
							'size'=>45,	
						),
						'source'=>$this->createUrl('anagrafica/comuneAutocomplete'),
						'options'=>array(
					        'showAnim'=>'fold',
					        'select'=>"js:function(event, ui) {
										jQuery('#Anagrafica_comune_nascita').val(ui.item.nome);
										jQuery('#Anagrafica_regione_nascita').val(ui.item.regione);
										jQuery('#Anagrafica_provincia_nascita').val(ui.item.provincia);
					                  }",
							
					    ),
					))
				?>
				<?php echo $form->error($model,'comune_nascita'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_nascita'); ?>
				<?php echo $form->textField($model,'regione_nascita',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'regione_nascita'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_nascita'); ?>
				<?php echo $form->textField($model,'provincia_nascita',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'provincia_nascita'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Residenza Autocomplete
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_residenza'); ?>
				<?php
					$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'model'=>$model,
						'attribute'=>'comune_residenza',
					    'htmlOptions'=>array(
					    	'placeholder'=>'Autocompleta Comune',
							'size'=>45,	
						),
						'source'=>$this->createUrl('anagrafica/comuneAutocomplete'),
						'options'=>array(
					        'showAnim'=>'fold',
					        'select'=>"js:function(event, ui) {
										jQuery('#Anagrafica_comune_residenza').val(ui.item.nome);
										jQuery('#Anagrafica_regione_residenza').val(ui.item.regione);
										jQuery('#Anagrafica_provincia_residenza').val(ui.item.provincia);
					                  }",
							
					    ),
					))
				?>
				<?php echo $form->error($model,'comune_residenza'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'indirizzo_residenza'); ?>
				<?php echo $form->textField($model,'indirizzo_residenza',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'indirizzo_residenza'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_residenza'); ?>
				<?php echo $form->textField($model,'regione_residenza',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'regione_residenza'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_residenza'); ?>
				<?php echo $form->textField($model,'provincia_residenza',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'provincia_residenza'); ?>
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
				<?php echo $form->error($model,'telefono'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'fax'); ?>
				<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'fax'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'cellulare'); ?>
				<?php echo $form->textField($model,'cellulare',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'cellulare'); ?>
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
				<?php echo $form->error($model,'email'); ?>
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
				<?php echo $form->error($model,'iban'); ?>
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