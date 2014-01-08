<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idWerkSoort'); ?>
		<?php echo $form->textField($model,'idWerkSoort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Naam'); ?>
		<?php echo $form->textField($model,'Naam',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Omschrijving'); ?>
		<?php echo $form->textField($model,'Omschrijving',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->