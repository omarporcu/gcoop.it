<?php
/* @var $this AllegatiController */
/* @var $model Allegati */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'allegati-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php if(isset($_GET['sez'])) {echo $form->hiddenField($model, 'idsezione',array('value'=>$_GET['idsez']));}else{echo $form->hiddenField($model, 'idsezione');} ?>
	<?php if(isset($_GET['sez'])){echo $form->hiddenField($model, 'sezione',array('value'=>$_GET['sez']));}else{echo $form->hiddenField($model, 'sezione');}?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Allegato
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'allegato'); ?>
				<?php echo $form->fileField($model,'allegato'); ?>
				<?php echo $form->error($model,'allegato'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'nome'); ?>
				<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'nome'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'descrizione'); ?>
				<?php echo $form->textField($model,'descrizione',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'descrizione'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_inserimento'); ?>
				<?php echo $form->textField($model,'data_inserimento'); ?>
				<?php echo $form->error($model,'data_inserimento'); ?>
			</td>
		</tr>
		<!--tr>
			<td>
				<?php echo $form->labelEx($model,'privato'); ?>
				<?php echo $form->textField($model,'privato',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'privato'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'visibile'); ?>
				<?php echo $form->textField($model,'visibile',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'visibile'); ?>
			</td>
		</tr-->
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->