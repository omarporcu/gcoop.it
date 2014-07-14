<?php
/* @var $this DocumentiController */
/* @var $model Documenti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documenti-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<!--div class="row">
		<?php echo $form->labelEx($model,'id_anagrafica'); ?>
		<?php echo $form->textField($model,'id_anagrafica',array('size'=>45,'maxlength'=>45)); ?>
	</div-->

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettagli Documento
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<!--td>
				<?php echo $form->labelEx($model,'tipologia'); ?>
				<?php echo $form->textField($model,'tipologia',array('size'=>45,'maxlength'=>45)); ?>
			</td-->
			<td>
				<?php echo $form->labelEx($model,'numero_documento'); ?>
				<?php echo $form->textField($model,'numero_documento',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'ente_rilascio'); ?>
				<?php echo $form->textField($model,'ente_rilascio',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_rilascio'); ?>
				<?php echo $form->textField($model,'data_rilascio', array('placeholder'=>'gg/mm/aaaa')); ?> 
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'scadenza'); ?>
				<?php echo $form->textField($model,'scadenza', array('placeholder'=>'gg/mm/aaaa')); ?> 
			</td>
			<td></td>
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