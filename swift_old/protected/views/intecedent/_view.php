<?php
/* @var $this IntecedentController */
/* @var $data Intecedent */
?>

<div class="view row">

   <div class="col-md-4"><b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b></div>
   <div class="col-md-8"><?php echo CHtml::link(CHtml::encode($data->Naam), array('view', 'id' => $data->idIntecedent)); ?></div>

   <div class="col-md-4"><b><?php echo CHtml::encode($data->getAttributeLabel('Adres')); ?>:</b></div>
   <div class="col-md-8"><?php echo CHtml::encode($data->Adres); ?></div>

   <div class="col-md-4"><b><?php echo CHtml::encode($data->getAttributeLabel('Woonplaats')); ?>:</b></div>
   <div class="col-md-8"><?php echo CHtml::encode($data->Woonplaats); ?></div>

   <div class="col-md-4"><b><?php echo CHtml::encode($data->getAttributeLabel('Telefoon')); ?>:</b></div>
   <div class="col-md-8"><?php echo CHtml::encode($data->Telefoon); ?></div>

   <div class="col-md-4"><b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b></div>
   <div class="col-md-8"><?php echo CHtml::encode($data->EMail); ?></div>

   <div class="col-md-4"><b><?php echo CHtml::encode($data->getAttributeLabel('Geslacht')); ?>:</b></div>
   <div class="col-md-8"><?php echo CHtml::encode($data->Geslacht); ?></div>

   <div style="display: inline-block; padding:10px; width:100%; background-color:#ddd;">
      <div class="col-md-4">Aantal Contracten:</div>
      <div class="col-md-8"><?php echo Contract::model()->count('Intecedent_idIntecedent=:idIntecedent', array(':idIntecedent' => $data->idIntecedent)); ?></div>

      <div class="col-md-4">Aantal Bedrijf relaties:</div>
      <div class="col-md-8"><?php echo Bedrijfrelatiecontact::model()->count('Intecedent_idIntecedent=:idIntecedent', array(':idIntecedent' => $data->idIntecedent)); ?></div>
   </div>

</div>