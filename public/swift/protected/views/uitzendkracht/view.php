<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */

$this->breadcrumbs=array(
	'Uitzendkrachts'=>array('index'),
	$model->idUitzendkracht,
);

$this->menu=array(
	array('label'=>'List Uitzendkracht', 'url'=>array('index')),
	array('label'=>'Create Uitzendkracht', 'url'=>array('create')),
	array('label'=>'Update Uitzendkracht', 'url'=>array('update', 'id'=>$model->idUitzendkracht)),
	array('label'=>'Delete Uitzendkracht', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUitzendkracht),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Uitzendkracht', 'url'=>array('admin')),
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
