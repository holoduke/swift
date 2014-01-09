<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */
/* @var $form CActiveForm */
?>

<div class="form">

   <?php
   $form = $this->beginWidget('CActiveForm', array(
       'id' => 'uitzendkracht-form',
       'enableAjaxValidation' => false,
   ));
   ?>

   <p class="note">Fields with <span class="required">*</span> zijn vereist.</p>

      <?php echo $form->errorSummary($model); ?>

   <div class="row">
      <?php echo $form->labelEx($model, 'Naam'); ?>
<?php echo $form->textField($model, 'Naam', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'Naam'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Geslacht'); ?>
      <?php
      $list = Array("M" => "Man", "V" => "Vrouw");
      echo $form->dropDownList($model, 'Geslacht', $list);
      ?>

<?php echo $form->error($model, 'Geslacht'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'GeboorteDatum'); ?>
<?php echo $form->dateField($model, 'GeboorteDatum'); ?>
<?php echo $form->error($model, 'GeboorteDatum'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Adres'); ?>
<?php echo $form->textField($model, 'Adres', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'Adres'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Postcode'); ?>
<?php echo $form->textField($model, 'Postcode', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'Postcode'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Woonplaats'); ?>
<?php echo $form->textField($model, 'Woonplaats', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'Woonplaats'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Telefoon'); ?>
<?php echo $form->textField($model, 'Telefoon', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'Telefoon'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Email'); ?>
      <?php echo $form->emailField($model, 'Email', array('size' => 45, 'maxlength' => 45)); ?>

<?php echo $form->error($model, 'Email'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Intecedent_idIntecedent'); ?>

      <?php
      
      $Vmodel = Intecedent::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idIntecedent', 'Naam');
      echo $form->dropDownList($model, 'Intecedent_idIntecedent', $list);
      ?>



<?php echo $form->error($model, 'Intecedent_idIntecedent'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Vestiging_idVestiging'); ?>
      <?php
      $Vmodel = Vestiging::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idVestiging', 'Naam');
      echo $form->dropDownList($model, 'Vestiging_idVestiging', $list);
      ?>

<?php echo $form->error($model, 'Vestiging_idVestiging'); ?>
   </div>

   <div class="row buttons">
   <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
   </div>

<?php $this->endWidget(); ?>

</div><!-- form -->