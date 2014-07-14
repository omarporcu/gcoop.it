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

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php 
			if(isset($_GET['an']))
			{
				echo $form->hiddenField($model, 'id_anagrafica',array('value'=>$_GET['an']));
			} 
			else 
			{
				echo $form->hiddenField($model, 'id_anagrafica');
			} ?>
	</div>
	<!--div class="row">
		<?php echo $form->labelEx($model,'id_anagrafica'); ?>
		<?php echo $form->dropDownList(
			$model, 
			'id_anagrafica', 
			CHtml::listData(
				Anagrafica::model()->findAll(array('order'=>'cognome')), 'id', 'concatened'),
				array(
					'empty'=>'Seleziona Anagrafica',
					'ajax'=>array(
						'type'=>'POST', //request type
					)
				)
			);
		?>
		<?php echo $form->error($model,'id_anagrafica'); ?>
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
			<td>
				<?php echo $form->labelEx($model,'tipologia'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'tipologia', 
					CHtml::listData(
						TipoDocumenti::model()->findAll(), 'id', 'nome'),
						array(
							'empty'=>'Seleziona Tipologia',
						)
					);
				?>
				<?php echo $form->error($model,'tipologia'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'numero_documento'); ?>
				<?php echo $form->textField($model,'numero_documento',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'numero_documento'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'ente_rilascio'); ?>
				<?php echo $form->textField($model,'ente_rilascio',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'ente_rilascio'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_rilascio'); ?>
				<?php echo $form->textField($model,'data_rilascio', array('placeholder'=>'gg/mm/aaaa')); ?> 
				<?php echo $form->error($model,'data_rilascio'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'scadenza'); ?>
				<?php echo $form->textField($model,'scadenza', array('placeholder'=>'gg/mm/aaaa')); ?> 
				<?php echo $form->error($model,'scadenza'); ?>
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
				<?php echo $form->error($model,'note'); ?>
			</td>
		</tr>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->