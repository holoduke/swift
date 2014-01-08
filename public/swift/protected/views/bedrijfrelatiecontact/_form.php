<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */
/* @var $form CActiveForm */
?>

<div class="form">

   <?php
   $form = $this->beginWidget('CActiveForm', array(
       'id' => 'bedrijfrelatiecontact-form',
       'enableAjaxValidation' => false,
   ));
   ?>

   <p class="note">Fields with <span class="required">*</span> are required.</p>

   <?php echo $form->errorSummary($model); ?>

   <div class="row">
      <?php echo $form->labelEx($model, 'Voorletters'); ?>
      <?php echo $form->textField($model, 'Voorletters', array('size' => 45, 'maxlength' => 45)); ?>
      <?php echo $form->error($model, 'Voorletters'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'Achternaam'); ?>
      <?php echo $form->textField($model, 'Achternaam', array('size' => 45, 'maxlength' => 45)); ?>
      <?php echo $form->error($model, 'Achternaam'); ?>
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
      <?php echo $form->labelEx($model, 'Functie'); ?>
      <?php echo $form->textField($model, 'Functie', array('size' => 45, 'maxlength' => 45)); ?>
      <?php echo $form->error($model, 'Functie'); ?>
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
      <?php echo $form->labelEx($model, 'BedrijfRelatie_idBedrijfRelatie'); ?>
      <?php
      $Vmodel = Bedrijfrelatie::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idBedrijfRelatie', 'Naam');
      echo $form->dropDownList($model, 'BedrijfRelatie_idBedrijfRelatie', $list);
      ?>
      <?php echo $form->error($model, 'BedrijfRelatie_idBedrijfRelatie'); ?>
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

   <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
   </div>

<?php $this->endWidget(); ?>

</div><!-- form -->