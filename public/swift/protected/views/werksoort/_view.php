<?php
/* @var $this WerksoortController */
/* @var $data Werksoort */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Naam), array('view', 'id'=>$data->idWerkSoort)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Omschrijving')); ?>:</b>
	<?php echo CHtml::encode($data->Omschrijving); ?>
	<br />


</div>