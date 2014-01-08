<?php

/* @var $this VestigingController */
/* @var $data Vestiging */
?>

<div class="view row">

    <div class="col-md-4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('idVestiging')); ?>:</b>
	</div>
	
	<div class="col-md-8">
	<?php echo CHtml::link(CHtml::encode($data->idVestiging), array('view', 'id'=>$data->idVestiging)); ?>
	</div>

	
	<div class="col-md-4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b>
	</div>
	<div class="col-md-8">
	<?php echo CHtml::encode($data->Naam); ?>
	</div>

	<div class="col-md-4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Adres')); ?>:</b>
	</div>
	<div class="col-md-8">
	<?php echo CHtml::encode($data->Adres); ?>
	</div>

	<div class="col-md-4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Postcode')); ?>:</b>
	</div>
	
	<div class="col-md-8">
	<?php echo CHtml::encode($data->Postcode); ?>
	</div>
	
    <div class="col-md-4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Woonplaats')); ?>:</b>
	</div>
	<div class="col-md-6">
	<?php echo CHtml::encode($data->Woonplaats); ?>
	</div>

	<div class="col-md-4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefoon')); ?>:</b>
	</div>
	<div class="col-md-6">
	<?php echo CHtml::encode($data->Telefoon); ?>
	</div>

	<div class="col-md-4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b>
	</div>
	
	<div class="col-md-6">
	<?php echo CHtml::encode($data->EMail); ?>
	</div>


</div>