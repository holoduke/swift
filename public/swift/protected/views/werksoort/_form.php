<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'werksoort-form',
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
		<?php echo $form->labelEx($model,'Omschrijving'); ?>
		<?php echo $form->textField($model,'Omschrijving',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Omschrijving'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->