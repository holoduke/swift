<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */
/* @var $form CActiveForm */
?>

<div class="form">

   <?php
   $form = $this->beginWidget('CActiveForm', array(
       'id' => 'intecedent-form',
       'enableAjaxValidation' => false,
   ));
   ?>

   <p class="note">Fields with <span class="required">*</span> are required.</p>

      <?php echo $form->errorSummary($model); ?>

   <div class="row">
      <?php echo $form->labelEx($model, 'Naam'); ?>
<?php echo $form->textField($model, 'Naam', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'Naam'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Adres'); ?>
<?php echo $form->textField($model, 'Adres', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'Adres'); ?>
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
      <?php echo $form->labelEx($model, 'EMail'); ?>
<?php echo $form->emailField($model, 'EMail', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'EMail'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Geslacht'); ?>
      <?php
      $list = Array("M"=>"Man", "V"=>"Vrouw");
      echo $form->dropDownList($model, 'Vestiging_idVestiging', $list);
      ?>
<?php echo $form->error($model, 'Geslacht'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'IsBeheerder'); ?>
      <?php
      $list = Array(true=>"Ja", false=>"Nee");
      echo $form->dropDownList($model, 'Vestiging_idVestiging', $list);
      ?>

<?php echo $form->error($model, 'IsBeheerder'); ?>
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