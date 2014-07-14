<?php
/* @var $this ContrattiController */
/* @var $model Contratti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Contratto
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'id_utente'); ?>
				<?php echo CHtml::encode($model->id_utente); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'ncontratto'); ?>
				<?php echo CHtml::encode($model->ncontratto); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'utente'); ?>
				<?php echo CHtml::encode($model->utente); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tipologia'); ?>
				<?php echo CHtml::encode($model->tipologia); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo CHtml::encode($model->societa); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Inizio/Termine
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data_inizio'); ?>
				<?php echo CHtml::encode($model->data_inizio); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_fine'); ?>
				<?php echo CHtml::encode($model->data_fine); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Ruolo
					</div>
				</div>
			</td>
		</tr>	
		<tr>
			<td>
				<?php echo $form->labelEx($model,'ruolo'); ?>
				<?php echo CHtml::encode($model->ruolo); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provvigione'); ?>
				<?php echo CHtml::encode($model->provvigione); ?>
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
				<?php echo $form->labelEx($model,'note'); ?>
				<?php echo CHtml::encode($model->note); ?>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->