<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $data Bedrijfrelatiecontact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBedrijfRelatieContact')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idBedrijfRelatieContact), array('view', 'id'=>$data->idBedrijfRelatieContact)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Voorletters')); ?>:</b>
	<?php echo CHtml::encode($data->Voorletters); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Achternaam')); ?>:</b>
	<?php echo CHtml::encode($data->Achternaam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Geslacht')); ?>:</b>
	<?php echo CHtml::encode($data->Geslacht); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Functie')); ?>:</b>
	<?php echo CHtml::encode($data->Functie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefoon')); ?>:</b>
	<?php echo CHtml::encode($data->Telefoon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b>
	<?php echo CHtml::encode($data->EMail); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('BedrijfRelatie_idBedrijfRelatie')); ?>:</b>
	<?php echo CHtml::encode($data->BedrijfRelatie_idBedrijfRelatie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Intecedent_idIntecedent')); ?>:</b>
	<?php echo CHtml::encode($data->Intecedent_idIntecedent); ?>
	<br />

	*/ ?>

</div>