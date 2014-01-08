<?php
/* @var $this VestigingController */
/* @var $model Vestiging */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idVestiging'); ?>
		<?php echo $form->textField($model,'idVestiging'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Naam'); ?>
		<?php echo $form->textField($model,'Naam',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Adres'); ?>
		<?php echo $form->textField($model,'Adres',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Postcode'); ?>
		<?php echo $form->textField($model,'Postcode',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Woonplaats'); ?>
		<?php echo $form->textField($model,'Woonplaats',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefoon'); ?>
		<?php echo $form->textField($model,'Telefoon',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMail'); ?>
		<?php echo $form->textField($model,'EMail',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->