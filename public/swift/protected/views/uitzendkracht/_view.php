<?php
/* @var $this UitzendkrachtController */
/* @var $data Uitzendkracht */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUitzendkracht')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUitzendkracht), array('view', 'id'=>$data->idUitzendkracht)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b>
	<?php echo CHtml::encode($data->Naam); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefoon')); ?>:</b>
	<?php echo CHtml::encode($data->Telefoon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Intecedent_idIntecedent')); ?>:</b>
	<?php echo CHtml::encode($data->Intecedent_idIntecedent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Vestiging_idVestiging')); ?>:</b>
	<?php echo CHtml::encode($data->Vestiging_idVestiging); ?>
	<br />

	*/ ?>

</div>