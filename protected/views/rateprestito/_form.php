<?php
/* @var $this RateprestitoController */
/* @var $model Rateprestito */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rateprestito-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

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
				<?php echo $form->labelEx($model,'prestito'); ?>
				<?php echo $form->textField($model,'prestito',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'prestito'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo $form->textField($model,'societa',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'societa'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo $form->textField($model,'anagrafica',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'anagrafica'); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettaglio Rata
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'rata'); ?>
				<?php echo $form->textField($model,'rata',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'rata'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'importo'); ?>
				<?php echo $form->textField($model,'importo',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'importo'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'data'); ?>
				<?php echo $form->textField($model,'data',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'data'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'pagata'); ?>
				<!--?php echo $form->textField($model,'pagata',array('size'=>45,'maxlength'=>45)); ?-->
				<?php echo $form->dropDownList(
					$model, 
					'pagata', 
					array('pagata'=>'pagata','da pagare'=>'da pagare'),
					array(
						'empty'=>'--',
						'ajax'=>array(
							'type'=>'POST', //request type
							)
						)
					);
				?>
				<?php echo $form->error($model,'pagata'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->