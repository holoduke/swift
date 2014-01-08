<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idIntecedent'); ?>
		<?php echo $form->textField($model,'idIntecedent'); ?>
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

	<div class="row">
		<?php echo $form->label($model,'Geslacht'); ?>
		<?php echo $form->textField($model,'Geslacht',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsBeheerder'); ?>
		<?php echo $form->textField($model,'IsBeheerder'); ?>
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