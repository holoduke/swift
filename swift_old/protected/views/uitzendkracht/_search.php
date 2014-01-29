<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idUitzendkracht'); ?>
		<?php echo $form->textField($model,'idUitzendkracht'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Naam'); ?>
		<?php echo $form->textField($model,'Naam',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Geslacht'); ?>
		<?php echo $form->textField($model,'Geslacht',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GeboorteDatum'); ?>
		<?php echo $form->textField($model,'GeboorteDatum'); ?>
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
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Intecedent_idIntecedent'); ?>
		<?php echo $form->textField($model,'Intecedent_idIntecedent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Vestiging_idVestiging'); ?>
		<?php echo $form->textField($model,'Vestiging_idVestiging'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->