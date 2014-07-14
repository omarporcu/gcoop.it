<?php
/* @var $this AllegatiController */
/* @var $model Allegati */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'allegati-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--div class="row">
		<?php echo $form->textField($model,'idsezione',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idsezione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sezione'); ?>
		<?php echo $form->textField($model,'sezione',array('size'=>45,'maxlength'=>45)); ?>
	</div-->

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
				<?php echo $form->labelEx($model,'nome'); ?>
				<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_inserimento'); ?>
				<?php echo $form->textField($model,'data_inserimento'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'descrizione'); ?>
				<?php echo $form->textField($model,'descrizione',array('size'=>96,'maxlength'=>96)); ?>
			</td>
		</tr>
		<!--tr>
			<td>
				<?php echo $form->labelEx($model,'privato'); ?>
				<?php echo $form->textField($model,'privato',array('size'=>45,'maxlength'=>45)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'visibile'); ?>
				<?php echo $form->textField($model,'visibile',array('size'=>45,'maxlength'=>45)); ?>
			</td>
		</tr-->
		<tr>
			<td>
					<?php echo $form->labelEx($model,'allegato'); ?>
				<center>
					<a href="../files/<?php echo $model->allegato; ?>" target="_blank">
						<img src="http://www.google.com/images/icons/product/docs-64.png"><br>
						<?php echo $model->allegato; ?>
					</a>
				</center>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->