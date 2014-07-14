<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestiti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Prestito
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo CHtml::encode($model->causale); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'totale'); ?>
				<?php echo CHtml::encode($model->totale); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'n_rate'); ?>
				<?php echo CHtml::encode($model->n_rate); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo CHtml::encode($model->data); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'scadenza'); ?>
				<?php echo CHtml::encode($model->scadenza); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Amministrazione
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo CHtml::encode($model->societa); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo CHtml::encode($model->anagrafica); ?>
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
				<?php echo $form->labelEx($model,'altro'); ?>
				<?php echo CHtml::encode($model->altro); ?>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->