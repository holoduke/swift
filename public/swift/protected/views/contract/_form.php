<?php
/* @var $this ContractController */
/* @var $model Contract */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contract-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'StartDatum'); ?>
		<?php echo $form->dateField($model,'StartDatum',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'StartDatum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UurTarief'); ?>
		<?php echo $form->textField($model,'UurTarief'); ?>
		<?php echo $form->error($model,'UurTarief'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UurLoon'); ?>
		<?php echo $form->textField($model,'UurLoon'); ?>
		<?php echo $form->error($model,'UurLoon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JobFunctie_idJobFunctie'); ?>
      
      <?php
      $Vmodel = JobFunctie::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idJobFunctie', 'StartDatum');
      echo $form->dropDownList($model, 'JobFunctie_idJobFunctie', $list);
      ?>
      
		<?php echo $form->error($model,'JobFunctie_idJobFunctie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BedrijfRelatie_idBedrijfRelatie'); ?>
      
      <?php
      $Vmodel = BedrijfRelatie::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idBedrijfRelatie', 'Naam');
      echo $form->dropDownList($model, 'BedrijfRelatie_idBedrijfRelatie', $list);
      ?>
      
		<?php echo $form->error($model,'BedrijfRelatie_idBedrijfRelatie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Uitzendkracht_idUitzendkracht'); ?>
      
      <?php
      $Vmodel = Uitzendkracht::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idUitzendkracht', 'Naam');
      echo $form->dropDownList($model, 'Uitzendkracht_idUitzendkracht', $list);
      ?>

      
		<?php echo $form->error($model,'Uitzendkracht_idUitzendkracht'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Intecedent_idIntecedent'); ?>

      <?php
      $Vmodel = Intecedent::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idIntecedent', 'Naam');
      echo $form->dropDownList($model, 'Intecedent_idIntecedent', $list);
      ?>
      
		<?php echo $form->error($model,'Intecedent_idIntecedent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->