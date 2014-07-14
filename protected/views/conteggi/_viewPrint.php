<?php
/* @var $this ConteggiController */
/* @var $model Conteggi */
/* @var $form CActiveForm */
?>

<table>
	<tr>
		<td>
			<div class="portlet-decoration">
				<div class="portlet-title">
					Dettagli Conteggio
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::activeLabel($model,'anagrafica'); ?>:
			<?php echo CHtml::encode($model->anagrafica); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::activeLabel($model,'targa'); ?>:
			<?php echo CHtml::encode($model->targa); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::activeLabel($model,'mansione'); ?>:
			<?php echo CHtml::encode($model->mansione); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::activeLabel($model,'societa'); ?>:
			<?php echo CHtml::encode($model->societa); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::activeLabel($model,'citta'); ?>:
			<?php echo CHtml::encode($model->citta); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::activeLabel($model,'mese'); ?>:
			<?php echo CHtml::encode($model->mese)." ".CHtml::encode($model->anno); ?>
		</td>
	</tr>
</table>


