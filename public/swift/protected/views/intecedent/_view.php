<?php
/* @var $this IntecedentController */
/* @var $data Intecedent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIntecedent')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idIntecedent), array('view', 'id'=>$data->idIntecedent)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b>
	<?php echo CHtml::encode($data->Naam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Adres')); ?>:</b>
	<?php echo CHtml::encode($data->Adres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Woonplaats')); ?>:</b>
	<?php echo CHtml::encode($data->Woonplaats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefoon')); ?>:</b>
	<?php echo CHtml::encode($data->Telefoon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b>
	<?php echo CHtml::encode($data->EMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Geslacht')); ?>:</b>
	<?php echo CHtml::encode($data->Geslacht); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('IsBeheerder')); ?>:</b>
	<?php echo CHtml::encode($data->IsBeheerder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Vestiging_idVestiging')); ?>:</b>
	<?php echo CHtml::encode($data->Vestiging_idVestiging); ?>
	<br />

	*/ ?>

</div>