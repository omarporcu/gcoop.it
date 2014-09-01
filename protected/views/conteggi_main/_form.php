<?php
/* @var $this Conteggi_mainController */
/* @var $model Conteggi_main */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conteggi-main-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">I campi con <span class="required">*</span> sono obbligatori.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<table>
		<tr>
			<td colspan="3">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Dettagli Anagrafica
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<!--td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'anagrafica', 
					CHtml::listData(
						Anagrafica::model()->findAll(array('order'=>'cognome')), 'id', 'concatened'), 
						array(
                    		'empty' => 'Seleziona Anagrafica',
                    		'ajax'=>array(
                    			'type'=>'POST',
								'url'=>$this->createUrl('getAnag'),
								'data'=>array('id'=>'js:this.value'),
								'dataType'=>'json',							
								'success'=>'function (data) {
									$("#Conteggi_main_targa").find("option").remove().end();
									var targhe = [];
									$(data).each(function(i,val){
									    $.each(val,function(k,v){
									    	console.log(k+" : "+ v);
											if (k=="targa") {
												$("#Conteggi_main_"+k).append($("<option>",{text: v}));
											} else {
												$("#Conteggi_main_"+k).val(v);	
											}
									})});
									console.log(targhe);
																		
								}'
							)
						)
					);
                ?>
				<?php echo $form->error($model,'anagrafica'); ?>
			</td-->
			<td>
				<?php echo $form->labelEx($model,'anagrafica'); ?>
				<?php
					$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'model'=>$model,
						'attribute'=>'anagrafica',
					    'htmlOptions'=>array(
					    	'placeholder'=>'Autocompleta Anagrafica',
							'size'=>45,	
						),
						'source'=>$this->createUrl('conteggi_main/anagraficaAutocomplete'),
						//'source'=>$this->createUrl('conteggi_main/getAnag'),
						'options'=>array(
					        'showAnim'=>'fold',
					        'select'=>"js:function(event, ui) {
										jQuery('#Conteggi_main_anagrafica').val(ui.item.nome);
										jQuery('#Conteggi_main_citta').val(ui.item.citta);
										jQuery('#Conteggi_main_societa').val(ui.item.societa);
										jQuery('#Conteggi_main_mansione').val(ui.item.mansione);
										jQuery('#Conteggi_main_targa').val(ui.item.targa);
					                  }",
							
					    ),
					))
				?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'mese'); ?>
				<?php echo $form->dropDownList(
					$model, 
					'mese', 
					array(
						'Gennaio'=>'Gennaio',
						'Febbraio'=>'Febbraio',
						'Marzo'=>'Marzo',
						'Aprile'=>'Aprile',
						'Maggio'=>'Maggio',
						'Giugno'=>'Giugno',
						'Luglio'=>'Luglio',
						'Agosto'=>'Agosto',
						'Settembre'=>'Settembre',
						'Ottobre'=>'Ottobre',
						'Novembre'=>'Novembre',
						'Dicembre'=>'Dicembre',
					),
					array(
						'empty'=>'Seleziona Mese',
						)
					);
				?>
				<?php echo $form->error($model,'mese'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'anno'); ?>
				<?php echo $form->textField($model,'anno',array('size'=>4,'maxlength'=>4,'value'=>date("Y"))); ?>
				<?php echo $form->error($model,'anno'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'citta'); ?>
				<?php echo $form->textField($model,'citta',array('size'=>25,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'citta'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'societa'); ?>
				<?php echo $form->textField($model,'societa',array('size'=>25,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'societa'); ?>				
			</td>
			<td>
				<?php echo $form->labelEx($model,'mansione'); ?>
				<?php echo $form->textField($model,'mansione',array('size'=>25,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'mansione'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'targa'); ?>
				<?php echo $form->dropDownList(
					$model, 'targa', array(),array('empty'=>'Seleziona Targa')); ?>
				<!--?php echo $form->textField($model,'targa',array('size'=>10,'maxlength'=>10)); ?-->
				<?php echo $form->error($model,'targa'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'bonifico'); ?>
				<?php echo $form->textField($model,'bonifico',array('size'=>25,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'bonifico'); ?>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salva' : 'Salva'); ?>
	</div> 
	
<?php $this->endWidget(); ?>

</div><!-- form -->