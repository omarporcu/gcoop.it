<?php
/* @var $this SediController */
/* @var $model Sedi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sedi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php 
		if(isset($_GET['soc']))
		{
			echo $form->hiddenField($model, 'id_societa',array('value'=>$_GET['soc']));
		} 
		else 
		{
			echo $form->hiddenField($model, 'id_societa');
		} ?>
	<?php echo $form->error($model,'id_societa'); ?>

	<table>
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
				<?php echo $form->labelEx($model,'cap'); ?>
				<?php echo CHtml::encode($model->cap); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo CHtml::encode($model->telefono); ?>
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