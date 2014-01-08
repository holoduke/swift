<?php
/* @var $this JobfunctieController */
/* @var $model Jobfunctie */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idJobFunctie'); ?>
		<?php echo $form->textField($model,'idJobFunctie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AantalPersonen'); ?>
		<?php echo $form->textField($model,'AantalPersonen',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StartDatum'); ?>
		<?php echo $form->textField($model,'StartDatum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Uren'); ?>
		<?php echo $form->textField($model,'Uren'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UurTarief'); ?>
		<?php echo $form->textField($model,'UurTarief'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WerkSoort_idWerkSoort'); ?>
		<?php echo $form->textField($model,'WerkSoort_idWerkSoort'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->