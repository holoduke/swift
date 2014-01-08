<?php
/* @var $this JobfunctieController */
/* @var $model Jobfunctie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobfunctie-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'AantalPersonen'); ?>
		<?php echo $form->textField($model,'AantalPersonen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'AantalPersonen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StartDatum'); ?>
		<?php echo $form->dateField($model,'StartDatum'); ?>
		<?php echo $form->error($model,'StartDatum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Uren'); ?>
		<?php echo $form->textField($model,'Uren'); ?>
		<?php echo $form->error($model,'Uren'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UurTarief'); ?>
		<?php echo $form->textField($model,'UurTarief'); ?>
		<?php echo $form->error($model,'UurTarief'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WerkSoort_idWerkSoort'); ?>
      
            <?php
      $Vmodel = Werksoort::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idWerkSoort', 'Naam');
      echo $form->dropDownList($model, 'WerkSoort_idWerkSoort', $list);
      ?>

      
		<?php echo $form->error($model,'WerkSoort_idWerkSoort'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->