<?php
/* @var $this FattureController */
/* @var $model Fatture */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fatture-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Fattura
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'numero_fattura'); ?>
				<?php echo $form->textField($model,'numero_fattura',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'numero_fattura'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo $form->textField($model,'data', array('placeholder'=>'gg/mm/aaaa')); ?>
				<?php echo $form->error($model,'data'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tipo'); ?>
				<!--?php echo $form->dropDownList(
					$model, 
					'tipo', 
					array('1'=>'Vendita','2'=>'Acquisto'),
					array('empty'=>'Seleziona Tipologia')); 
				?-->
				<?php echo $form->dropDownList(
					$model, 
					'tipo', 
					array('Vendita'=>'Vendita','Acquisto'=>'Acquisto'),
					array(
						'empty'=>'Seleziona Tipologia',
						'ajax'=>array(
							'type'=>'POST', //request type
							'url'=>CController::createUrl('Fatture/aggiornaEsterno'), //url to call.
							'update'=>'#Fatture_cliente', //selector to update
							)
						)
					);
				?>
				<?php echo $form->error($model,'tipo'); ?>
			</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettagli
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<!--?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?-->
				<?php echo $form->dropDownList(
					$model, 
					'societa', 
					CHtml::listData(
						Societa::model()->findAll(array('order'=>'ragione_sociale')), 'ragione_sociale', 'ragione_sociale'),
						array(
							'empty'=>'Seleziona Società',
						)
					);
				?>
				<?php echo $form->error($model,'societa'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'cliente'); ?>
				<!--?php echo $form->dropDownList(
					$model, 
					'cliente', 
					CHtml::listData(
						Fornitori::model()->findAll(array('order'=>'ragione_sociale')), 'ragione_sociale', 'ragione_sociale'),
						array(
							'empty'=>'Seleziona Fornitore',
						)
					);
				?-->
				<?php echo $form->dropDownList(
					$model, 
					'cliente', 
					array()
					);
				?>
				<?php echo $form->error($model,'cliente'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo $form->textField($model,'causale',array('size'=>116,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'causale'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $form->labelEx($model,'descrizione'); ?>
				<?php echo $form->textArea($model,'descrizione',array('rows'=>6, 'cols'=>83)); ?>
				<?php echo $form->error($model,'descrizione'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'imponibile'); ?>
				<?php echo $form->textField($model,'imponibile',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'imponibile'); ?>
			</td>
			<script type="text/javascript">
				$("#Fatture_imponibile").blur(
					function() {
						document.getElementById('Fatture_tot').value=(parseFloat(document.getElementById('Fatture_imponibile').value)+(parseFloat(document.getElementById('Fatture_imponibile').value)*parseFloat(document.getElementById('Fatture_iva').value)/100)).toFixed(2);
						document.getElementById('Fatture_imponibile').value=parseFloat(document.getElementById('Fatture_imponibile').value).toFixed(2);
					}
				)
			</script>
			<td>
				<?php echo $form->labelEx($model,'iva'); ?>
				<?php echo $form->textField($model,'iva',array('size'=>45,'maxlength'=>45, 'value'=>'22')); ?>
				<?php echo $form->error($model,'iva'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tot'); ?>
				<?php echo $form->textField($model,'tot',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'tot'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_accredito'); ?>
				<?php echo $form->textField($model,'data_accredito', array('placeholder'=>'gg/mm/aaaa')); ?>
				<?php echo $form->error($model,'data_accredito'); ?>
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