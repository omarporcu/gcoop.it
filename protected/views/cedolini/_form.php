<?php
/* @var $this CedoliniController */
/* @var $model Cedolini */
/* @var $form CActiveForm */
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
				<?php
					$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'model'=>$model,
						'attribute'=>'anagrafica',
					    'htmlOptions'=>array(
					    	'placeholder'=>'Autocompleta Anagrafica',
							'size'=>45,	
						),
						//'source'=>$this->createUrl('conteggi_main/anagraficaAutocomplete'),
						'source'=>$this->createUrl('cedolini/anagAutocomp'),
						'options'=>array(
					        'showAnim'=>'fold',
							'select'=>"js:function(event, ui) {
										$('#Cedolini_anagrafica').val(ui.item.nome);
										$('#Cedolini_societa').val(ui.item.societa);
										
					                  }",
					)))
				?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'societa'); ?>
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
				<?php echo $form->dropDownList(
					$model, 
					'mese', 
					array(
						'Gennaio'=>'Gennaio',
						'Febbraio'=>'Febbraio',
						'Marzo'=>'Marzo',
						'Aprile'=>'Aprile',
						'Maggio'=>'Maggio',
						'Giugno'=>'Giugno',
						'Luglio'=>'Luglio',
						'Agosto'=>'Agosto',
						'Settembre'=>'Settembre',
						'Ottobre'=>'Ottobre',
						'Novembre'=>'Novembre',
						'Dicembre'=>'Dicembre',
					),
					array(
						'empty'=>'Seleziona Mese',
						)
					);
				?>
				<?php echo $form->error($model,'mese'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anno'); ?>
				<?php echo $form->textField($model,'anno',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'anno'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'g_lavorati'); ?>
				<?php echo $form->textField($model,'g_lavorati',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'g_lavorati'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'importo'); ?>
				<?php echo $form->textField($model,'importo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'importo'); ?>
			</td>			
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo $form->textField($model,'data',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'data'); ?>
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
				<?php echo $form->textField($model,'note',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'note'); ?>
			</td>
		</tr>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->