<?php
/* @var $this ConteggiController */
/* @var $model Conteggi */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conteggi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php if (isset($_GET['ut']) && isset($_GET['an'])) {
		echo $form->hiddenField($model,'anagrafica',array('value'=>$_GET['ut']));
		echo $form->error($model,'anagrafica');
		echo $form->hiddenField($model,'id_utente',array('value'=>$_GET['an']));
		echo $form->error($model,'id_utente');
	} else {
		echo $form->hiddenField($model,'anagrafica');
		echo $form->error($model,'anagrafica');
		echo $form->hiddenField($model,'id_utente');
		echo $form->error($model,'id_utente');
	} ?>
	
	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Conteggio
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
				<?php echo $form->labelEx($model,'mansione'); ?>
				<?php echo $form->textField($model,'mansione',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'mansione'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'targa'); ?>
				<?php echo $form->textField($model,'targa',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'targa'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'societa'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'citta'); ?>
				<?php echo $form->textField($model,'citta',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'citta'); ?>
			</td>
		</tr>
		<!--tr>
			<td>
			</td>
			<td>
				<?php echo $form->labelEx($model,'totale'); ?>
				<?php echo $form->textField($model,'totale',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'totale'); ?>
			</td>
		</tr-->
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