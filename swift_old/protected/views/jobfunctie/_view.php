<?php
/* @var $this JobfunctieController */
/* @var $data Jobfunctie */
?>

<div class="view">

   <b><?php echo CHtml::encode($data->getAttributeLabel('idJobFunctie')); ?>:</b>
   <?php echo CHtml::link(CHtml::encode($data->idJobFunctie), array('view', 'id' => $data->idJobFunctie)); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('AantalPersonen')); ?>:</b>
   <?php echo CHtml::encode($data->AantalPersonen); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('StartDatum')); ?>:</b>
   <?php echo CHtml::encode($data->StartDatum); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('Uren')); ?>:</b>
   <?php echo CHtml::encode($data->Uren); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('UurTarief')); ?>:</b>
   <?php echo CHtml::encode($data->UurTarief); ?>
   <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('WerkSoort_idWerkSoort')); ?>:</b>
   <?php echo CHtml::encode(Werksoort::model()->findByPk($data->WerkSoort_idWerkSoort)->Naam); ?>
   <br />

</div>