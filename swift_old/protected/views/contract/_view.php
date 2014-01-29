<?php
/* @var $this ContractController */
/* @var $data Contract */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idContract')); ?>:</b>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StartDatum')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idContract), array('view', 'id'=>$data->idContract)); ?>
	<?php echo CHtml::encode($data->StartDatum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UurTarief')); ?>:</b>
	<?php echo CHtml::encode($data->UurTarief); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UurLoon')); ?>:</b>
	<?php echo CHtml::encode($data->UurLoon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JobFunctie_idJobFunctie')); ?>:</b>
	<?php echo CHtml::encode($data->JobFunctie_idJobFunctie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BedrijfRelatie_idBedrijfRelatie')); ?>:</b>
	<?php echo CHtml::encode($data->BedrijfRelatie_idBedrijfRelatie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Uitzendkracht_idUitzendkracht')); ?>:</b>
	<?php echo CHtml::encode($data->Uitzendkracht_idUitzendkracht); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Intecedent_idIntecedent')); ?>:</b>
	<?php echo CHtml::encode($data->Intecedent_idIntecedent); ?>
	<br />

	*/ ?>

</div>