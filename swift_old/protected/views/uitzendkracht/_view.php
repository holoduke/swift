<?php
/* @var $this UitzendkrachtController */
/* @var $data Uitzendkracht */
?>

<div class="view">

   <b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b>
   <?php echo CHtml::link(CHtml::encode($data->Naam), array('view', 'id' => $data->idUitzendkracht)); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Geslacht')); ?>:</b>
   <?php echo CHtml::encode($data->Geslacht); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('GeboorteDatum')); ?>:</b>
   <?php echo CHtml::encode($data->GeboorteDatum); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Adres')); ?>:</b>
   <?php echo CHtml::encode($data->Adres); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Postcode')); ?>:</b>
   <?php echo CHtml::encode($data->Postcode); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Woonplaats')); ?>:</b>
   <?php echo CHtml::encode($data->Woonplaats); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Telefoon')); ?>:</b>
   <?php echo CHtml::encode($data->Telefoon); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
   <?php echo CHtml::encode($data->Email); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Intecedent_idIntecedent')); ?>:</b>
   <?php echo Intecedent::model()->findAllByPk($data->Intecedent_idIntecedent)[0]->Naam; ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Vestiging_idVestiging')); ?>:</b>
   <?php echo Vestiging::model()->findAllByPk($data->Vestiging_idVestiging)[0]->Naam; ?>
   <br />

   <div style="display: inline-block; padding:10px; width:100%; background-color:#ddd;">
      <div class="col-md-4">Aantal Contracten:</div>
      <div class="col-md-8"><?php echo Contract::model()->count('Uitzendkracht_idUitzendkracht=:idUitzendkracht', array(':idUitzendkracht' => $data->idUitzendkracht)); ?></div>
   </div>

</div>