<?php
/* @var $this ContractController */
/* @var $model Contract */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idContract'); ?>
		<?php echo $form->textField($model,'idContract'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StartDatum'); ?>
		<?php echo $form->textField($model,'StartDatum',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UurTarief'); ?>
		<?php echo $form->textField($model,'UurTarief'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UurLoon'); ?>
		<?php echo $form->textField($model,'UurLoon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JobFunctie_idJobFunctie'); ?>
		<?php echo $form->textField($model,'JobFunctie_idJobFunctie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BedrijfRelatie_idBedrijfRelatie'); ?>
		<?php echo $form->textField($model,'BedrijfRelatie_idBedrijfRelatie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Uitzendkracht_idUitzendkracht'); ?>
		<?php echo $form->textField($model,'Uitzendkracht_idUitzendkracht'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Intecedent_idIntecedent'); ?>
		<?php echo $form->textField($model,'Intecedent_idIntecedent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->