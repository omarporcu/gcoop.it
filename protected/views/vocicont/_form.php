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

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php 
		if(isset($_GET['id_cont']))
		{
			echo $form->hiddenField($model, 'id_conteggio',array('value'=>$_GET['id_cont']));
		} 
		else 
		{
			echo $form->hiddenField($model, 'id_conteggio');
		} ?>
	<?php echo $form->error($model,'id_conteggio'); ?>

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
				<?php echo $form->dropDownList(
					$model, 
					'tipologia', 
					array(
						'Imponibile'=>'Imponibile',
						'Imponibile Giro Banche'=>'Imponibile Giro Banche',
						'Provvigione'=>'Provvigione',
						'Contributi INPS'=>'Contributi INPS',
						'Trattenute Azienda'=>'Trattenute Azienda',
						'Trattenuta su b.b.'=>'Trattenuta su b.b.',
						'Costi Sicurezza'=>'Costi Sicurezza',
						'Credito IRPEF'=>'Credito IRPEF',
						'Debito o Anticipi'=>'Debito o Anticipi',
						'rcv'=>'rcv',
						'Carburante'=>'Carburante',
						'Recupero IVA Carburante'=>'Recupero IVA Carburante',
						'Assicurazione'=>'Assicurazione',
						'Esso Card'=>'Esso Card',
						'Bollo Mezzo'=>'Bollo Mezzo',
						'Verbali o Multe'=>'Verbali o Multe',
						'Stipendio Imposto'=>'Stipendio Imposto',
						'Varie'=>'Varie',
					),
					array(
						'empty'=>'Seleziona Tipologia',
						)
					);
				?>
				<?php echo $form->error($model,'tipologia'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'causale'); ?>
				<?php echo $form->textField($model,'causale',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'causale'); ?>
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
				<?php echo $form->textField($model,'importo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'importo'); ?>
			</td>
		</tr>
			<script type="text/javascript">
				$("#Vocicont_importo").blur(
					function() {
						document.getElementById('Vocicont_importo').value=parseFloat(document.getElementById('Vocicont_importo').value).toFixed(2);
					}
				)
			</script>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->