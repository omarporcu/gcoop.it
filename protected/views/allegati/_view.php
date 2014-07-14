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
				<?php echo CHtml::encode($model->nome); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_inserimento'); ?>
				<?php echo CHtml::encode($model->data_inserimento); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'descrizione'); ?>
				<?php echo CHtml::encode($model->descrizione); ?>
			</td>
		</tr>
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