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

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

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
				<?php echo $form->labelEx($model,'ncontratto'); ?>
				<?php echo $form->textField($model,'ncontratto',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'ncontratto'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'utente'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'utente', 
					CHtml::listData(
						Anagrafica::model()->findAll(array('order'=>'cognome')), 'concatened', 'concatened'),
						array(
							'empty'=>'Seleziona Utente',
						)
					);
				?>
				<?php echo $form->error($model,'utente'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tipologia'); ?>
				<?php echo $form->textField($model,'tipologia',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'tipologia'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'societa', 
					CHtml::listData(
						Societa::model()->findAll(), 'ragione_sociale', 'ragione_sociale'),
						array(
							'empty'=>'Seleziona Societa',
						)
					);
				?>
				<?php echo $form->error($model,'societa'); ?>
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
				<?php echo $form->textField($model,'data_inizio', array('placeholder'=>'gg/mm/aaaa')); ?>
				<?php echo $form->error($model,'data_inizio'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_fine'); ?>
				<?php echo $form->textField($model,'data_fine', array('placeholder'=>'gg/mm/aaaa')); ?>
				<?php echo $form->error($model,'data_fine'); ?>
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
				<?php echo $form->textField($model,'ruolo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'ruolo'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provvigione'); ?>
				<?php echo $form->textField($model,'provvigione',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'provvigione'); ?>
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