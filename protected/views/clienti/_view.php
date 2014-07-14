<?php
/* @var $this ClientiController */
/* @var $model Clienti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clienti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dati Società
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td rowspan="3">
				<?php echo $form->labelEx($model,'logo'); ?>
				<!--?php echo $form->textField($model,'logo'); ?-->
				<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->logo,"image",array("width"=>200)); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'ragione_sociale'); ?>
				<!--?php echo $form->textField($model,'ragione_sociale); ?-->
				<?php echo CHtml::encode($model->ragione_sociale); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'gruppo'); ?>
				<?php echo CHtml::encode($model->gruppo); ?>
			</td>
		</tr>
		<tr>
			<!--td>
				<?php echo $form->labelEx($model,'tipologia'); ?>
				<?php echo CHtml::encode($model->tipologia); ?>
			</td-->
			<td>
				<?php echo $form->labelEx($model,'amministratore'); ?>
				<?php echo CHtml::encode($model->amministratore); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'p_iva'); ?>
				<?php echo CHtml::encode($model->p_iva); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'c_fiscale'); ?>
				<?php echo CHtml::encode($model->c_fiscale); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Sede Legale
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione'); ?>
				<?php echo CHtml::encode($model->regione); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia'); ?>
				<?php echo CHtml::encode($model->provincia); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune'); ?>
				<?php echo CHtml::encode($model->comune); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'indirizzo'); ?>
				<?php echo CHtml::encode($model->indirizzo); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Recapiti
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo CHtml::encode($model->telefono); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'fax'); ?>
				<?php echo CHtml::encode($model->fax); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo CHtml::encode($model->email); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Iscrizione Camera di Commercio
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'numero_iscrcc'); ?>
				<?php echo CHtml::encode($model->numero_iscrcc); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'data_iscrcc'); ?>
				<?php echo CHtml::encode($model->data_iscrcc); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'regione_iscrcc'); ?>
				<?php echo CHtml::encode($model->regione_iscrcc); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'provincia_iscrcc'); ?>
				<?php echo CHtml::encode($model->provincia_iscrcc); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'comune_iscrcc'); ?>
				<?php echo CHtml::encode($model->comune_iscrcc); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Sede Operativa
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'sede_operativa'); ?>
				<?php echo CHtml::encode($model->sede_operativa); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'referente'); ?>
				<?php echo CHtml::encode($model->referente); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'indirizzo_so'); ?>
				<?php echo CHtml::encode($model->indirizzo_so); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'citta_so'); ?>
				<?php echo CHtml::encode($model->citta_so); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'cap_so'); ?>
				<?php echo CHtml::encode($model->cap_so); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'tel_so'); ?>
				<?php echo CHtml::encode($model->tel_so); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'mail_so'); ?>
				<?php echo CHtml::encode($model->mail_so); ?>
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