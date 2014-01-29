<?php
/* @var $this ContractController */
/* @var $model Contract */
/* @var $form CActiveForm */
?>

<div class="form">

   <?php
   $form = $this->beginWidget('CActiveForm', array(
       'id' => 'contract-form',
       'enableAjaxValidation' => false,
   ));
   ?>

   <p class="note">Fields with <span class="required">*</span> are required.</p>

      <?php echo $form->errorSummary($model); ?>

   <div class="row">
      <?php echo $form->labelEx($model, 'StartDatum'); ?>
      <?php
      // echo $form->dateField($model,'StartDatum',array('size'=>45,'maxlength'=>45)); 

      $tmpDateStart = strtotime('now');
      $tmpDateEnd = strtotime('+3 years');
      $this->widget('zii.widgets.jui.CJuiDatePicker', array(
          'model' => $model,
          'attribute' => 'StartDatum',
          // additional javascript options for the date picker plugin
          'options' => array(
              'showAnim' => 'fold',
              'dateFormat' => 'dd-mm-yy', // format of "2012-12-25"
              'changeYear' => true, // can change year
              'changeMonth' => true, // can change month
              'yearRange' => date('Y', $tmpDateStart) .':' . date('Y', $tmpDateEnd),
              'minDate' => date('d-m-Y', $tmpDateStart), // minimum date
              'maxDate' => date('d-m-Y', $tmpDateEnd), // maximum date
          ),
          'htmlOptions' => array(
              'style' => ''
          ),
      ));
      ?>
<?php echo $form->error($model, 'StartDatum'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'UurTarief'); ?>
<?php echo $form->textField($model, 'UurTarief'); ?>
<?php echo $form->error($model, 'UurTarief'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'UurLoon'); ?>
<?php echo $form->textField($model, 'UurLoon'); ?>
<?php echo $form->error($model, 'UurLoon'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'JobFunctie_idJobFunctie'); ?>

      <?php
      $Vmodel = Jobfunctie::model()->findAll();
      $list = CHtml::listData($Vmodel, 'idJobFunctie', 'StartDatum');
      echo $form->dropDownList($model, 'JobFunctie_idJobFunctie', $list);
      ?>

<?php echo $form->error($model, 'JobFunctie_idJobFunctie'); ?>
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
      <?php echo $form->labelEx($model, 'Uitzendkracht_idUitzendkracht'); ?>

      <?php
      $Vmodel = Uitzendkracht::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idUitzendkracht', 'Naam');
      echo $form->dropDownList($model, 'Uitzendkracht_idUitzendkracht', $list);
      ?>


<?php echo $form->error($model, 'Uitzendkracht_idUitzendkracht'); ?>
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
		<?php echo $form->labelEx($model,'Active'); ?>
		<?php echo $form->checkBox($model,'Active',array('value' => true, 'uncheckValue'=>false)); ?>
		<?php echo $form->error($model,'Active'); ?>
	</div>

   
   <div class="row buttons">
   <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
   </div>

<?php $this->endWidget(); ?>

</div><!-- form -->