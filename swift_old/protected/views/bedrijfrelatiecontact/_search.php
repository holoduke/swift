<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idBedrijfRelatieContact'); ?>
		<?php echo $form->textField($model,'idBedrijfRelatieContact'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Voorletters'); ?>
		<?php echo $form->textField($model,'Voorletters',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Achternaam'); ?>
		<?php echo $form->textField($model,'Achternaam',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Geslacht'); ?>
		<?php echo $form->textField($model,'Geslacht',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Functie'); ?>
		<?php echo $form->textField($model,'Functie',array('size'=>45,'maxlength'=>45)); ?>
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
		<?php echo $form->label($model,'BedrijfRelatie_idBedrijfRelatie'); ?>
		<?php echo $form->textField($model,'BedrijfRelatie_idBedrijfRelatie'); ?>
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