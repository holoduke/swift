<?php
/* @var $this VestigingController */
/* @var $model Vestiging */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vestiging-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> zijn vereist.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Naam'); ?>
		<?php echo $form->textField($model,'Naam',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Naam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Adres'); ?>
		<?php echo $form->textField($model,'Adres',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Adres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Postcode'); ?>
<?php $this->widget('CMaskedTextField', array(
                'model' => $model,
                'value' => $model->isNewRecord ? $model->Postcode : '',
                'attribute' => 'Postcode',
                'mask' => '9999 aa',
                'htmlOptions' => array('size' => 11)
                )
        );
      ?>
		<?php echo $form->error($model,'Postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Woonplaats'); ?>
		<?php echo $form->textField($model,'Woonplaats',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Woonplaats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefoon'); ?>
      
<?php $this->widget('CMaskedTextField', array(
                'model' => $model,
                'value' => $model->isNewRecord ? $model->Telefoon : '',
                'attribute' => 'Telefoon',
                'mask' => '+99-99-9999999',
                'htmlOptions' => array('size' => 11)
                )
        );
      ?>
		<?php echo $form->error($model,'Telefoon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMail'); ?>
		<?php echo $form->emailField($model,'EMail',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EMail'); ?>
	</div>

   <div class="row">
		<?php echo $form->labelEx($model,'Active'); ?>
		<?php echo $form->checkBox($model,'Active',array('value' => true, 'uncheckValue'=>false)); ?>
		<?php echo $form->error($model,'Active'); ?>
	</div>


   
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

   
<?php $this->endWidget(); ?>

</div><!-- form -->