<?php
/* @var $this JobfunctieController */
/* @var $model Jobfunctie */
/* @var $form CActiveForm */
?>

<div class="form">

   <?php
   $form = $this->beginWidget('CActiveForm', array(
       'id' => 'jobfunctie-form',
       'enableAjaxValidation' => false,
   ));
   ?>

   <p class="note">Fields with <span class="required">*</span> are required.</p>

      <?php echo $form->errorSummary($model); ?>

   <div class="row">
      <?php echo $form->labelEx($model, 'AantalPersonen'); ?>
<?php echo $form->textField($model, 'AantalPersonen', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'AantalPersonen'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'StartDatum'); ?>
      <?php
      //echo $form->dateField($model,'StartDatum'); 

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
      <?php echo $form->labelEx($model, 'Uren'); ?>
      <?php echo $form->textField($model, 'Uren'); ?>
<?php echo $form->error($model, 'Uren'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'UurTarief'); ?>
      <?php echo $form->textField($model, 'UurTarief'); ?>
<?php echo $form->error($model, 'UurTarief'); ?>
   </div>

   <div class="row">
      <?php echo $form->labelEx($model, 'WerkSoort_idWerkSoort'); ?>

      <?php
      $Vmodel = Werksoort::model()->findAll(array());
      $list = CHtml::listData($Vmodel, 'idWerkSoort', 'Naam');
      echo $form->dropDownList($model, 'WerkSoort_idWerkSoort', $list);
      ?>


<?php echo $form->error($model, 'WerkSoort_idWerkSoort'); ?>
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