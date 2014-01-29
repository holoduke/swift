<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */

$this->breadcrumbs=array(
	'Uitzendkrachten'=>array('index'),
	$model->idUitzendkracht,
);

$this->menu=array(
	array('label'=>'Lijst Uitzendkrachten', 'url'=>array('index')),
	array('label'=>'Maak Uitzendkracht', 'url'=>array('create')),
	array('label'=>'Beheer Uitzendkracht', 'url'=>array('admin')),
	array('label'=>'Update Uitzendkracht', 'url'=>array('update', 'id'=>$model->idUitzendkracht)),
	array('label'=>'Verwijder Uitzendkracht', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUitzendkracht),'confirm'=>'Weet je het zeker?')),
);
?>

<h1>View Uitzendkracht #<?php echo $model->idUitzendkracht; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUitzendkracht',
		'Naam',
		'Geslacht',
		'GeboorteDatum',
		'Adres',
		'Postcode',
		'Woonplaats',
		'Telefoon',
		'Email',
		'Intecedent_idIntecedent',
		'Vestiging_idVestiging',
	),
)); ?>
