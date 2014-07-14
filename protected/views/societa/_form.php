<?php
/* @var $this SocietaController */
/* @var $model Societa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'societa-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Società
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td rowspan="3">
				<?php echo $form->labelEx($model,'logo'); ?>
				<!--?php echo $form->filefield($model,'logo'); ?-->
				<?php echo CHtml::activeFileField($model, 'logo'); ?>
				<?php
					if ($model->isNewRecord!='1')
					{
						echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->logo,"image",array("width"=>200));
					}
				?>
				<?php echo $form->error($model,'logo'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'ragione_sociale'); ?>
				<?php echo $form->textField($model,'ragione_sociale',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'ragione_sociale'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'gruppo'); ?>
				<?php echo $form->textField($model,'gruppo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'gruppo'); ?>
			</td>
		</tr>
		<tr>
			<!--td>
				<?php echo $form->labelEx($model,'tipologia'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'tipologia', 
					array('1'=>'Cliente','2'=>'Fornitore'),
					array('empty'=>'Seleziona Tipologia')); 
				?>
				<?php echo $form->error($model,'tipologia'); ?>
			</td-->
			<td>
				<?php echo $form->labelEx($model,'amministratore'); ?>
				<?php echo $form->textField($model,'amministratore',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'amministratore'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'p_iva'); ?>
				<?php echo $form->textField($model,'p_iva',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'p_iva'); ?>
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
						Sede Principale
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'indirizzo'); ?>
				<?php echo $form->textField($model,'indirizzo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'indirizzo'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'comune'); ?>
				<?php
					$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'model'=>$model,
						'attribute'=>'comune',
					    'htmlOptions'=>array(
					    	'placeholder'=>'Autocompleta Comune',
							'size'=>45,	
						),
						'source'=>$this->createUrl('societa/comuneAutocomplete'),
						'options'=>array(
					        'showAnim'=>'fold',
					        'select'=>"js:function(event, ui) {
										jQuery('#Societa_comune').val(ui.item.nome);
										jQuery('#Societa_cap').val(ui.item.cap);
										jQuery('#Societa_regione').val(ui.item.regione);
										jQuery('#Societa_provincia').val(ui.item.provincia);
					                  }",
							
					    ),
					))
				?>
				<?php echo $form->error($model,'comune'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'cap'); ?>
				<?php echo $form->textField($model,'cap',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'cap'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione'); ?>
				<?php echo $form->textField($model,'regione',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'regione'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia'); ?>
				<?php echo $form->textField($model,'provincia',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'provincia'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Recapiti
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
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'email'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Iscrizione Camera di Commercio
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'numero_iscrcc'); ?>
				<?php echo $form->textField($model,'numero_iscrcc',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'numero_iscrcc'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_iscrcc'); ?>
				<?php echo $form->textField($model,'data_iscrcc', array('placeholder'=>'gg/mm/aaaa')); ?>
				<?php echo $form->error($model,'data_iscrcc'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_iscrcc'); ?>
				<?php echo $form->textField($model,'regione_iscrcc',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'regione_iscrcc'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_iscrcc'); ?>
				<?php echo $form->textField($model,'provincia_iscrcc',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'provincia_iscrcc'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_iscrcc'); ?>
				<?php echo $form->textField($model,'comune_iscrcc',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'comune_iscrcc'); ?>
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