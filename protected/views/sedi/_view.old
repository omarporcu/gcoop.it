<?php
/* @var $this SediController */
/* @var $model Sedi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sedi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php 
		if(isset($_GET['soc']))
		{
			echo $form->hiddenField($model, 'id_societa',array('value'=>$_GET['soc']));
		} 
		else 
		{
			echo $form->hiddenField($model, 'id_societa');
		} ?>
	<?php echo $form->error($model,'id_societa'); ?>

	<table>
		<tr>
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
						'source'=>$this->createUrl('sedi/comuneAutocomplete'),
						'options'=>array(
					        'showAnim'=>'fold',
					        'select'=>"js:function(event, ui) {
										jQuery('#Sedi_comune').val(ui.item.nome);
										jQuery('#Sedi_regione').val(ui.item.regione);
										jQuery('#Sedi_provincia').val(ui.item.provincia);
					                  }",
							
					    ),
					))
				?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'indirizzo'); ?>
				<?php echo $form->textField($model,'indirizzo',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione'); ?>
				<?php echo $form->textField($model,'regione',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia'); ?>
				<?php echo $form->textField($model,'provincia',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'cap'); ?>
				<?php echo $form->textField($model,'cap',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
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