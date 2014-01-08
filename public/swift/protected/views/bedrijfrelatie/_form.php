<?php
/* @var $this BedrijfrelatieController */
/* @var $model Bedrijfrelatie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bedrijfrelatie-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

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
		<?php echo $form->textField($model,'Postcode',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Woonplaats'); ?>
		<?php echo $form->textField($model,'Woonplaats',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Woonplaats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KVKId'); ?>
		<?php echo $form->textField($model,'KVKId',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'KVKId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->