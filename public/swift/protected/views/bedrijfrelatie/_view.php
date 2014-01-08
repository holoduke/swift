<?php
/* @var $this BedrijfrelatieController */
/* @var $data Bedrijfrelatie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBedrijfRelatie')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idBedrijfRelatie), array('view', 'id'=>$data->idBedrijfRelatie)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b>
	<?php echo CHtml::encode($data->Naam); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('KVKId')); ?>:</b>
	<?php echo CHtml::encode($data->KVKId); ?>
	<br />


</div>