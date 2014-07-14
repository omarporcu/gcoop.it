<?php
/* @var $this VocicontController */
/* @var $model Vocicont */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vocicont-form',
	'enableAjaxValidation'=>false,
)); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tipologia'); ?>
				<?php echo CHtml::encode($model->tipologia); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo CHtml::encode($model->causale); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Importo
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'importo'); ?>
				<?php echo CHtml::encode($model->importo); ?>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->