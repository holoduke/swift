<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */

$this->breadcrumbs=array(
	'Intecedents'=>array('index'),
	$model->idIntecedent,
);

$this->menu=array(
	array('label'=>'List Intecedent', 'url'=>array('index')),
	array('label'=>'Create Intecedent', 'url'=>array('create')),
	array('label'=>'Update Intecedent', 'url'=>array('update', 'id'=>$model->idIntecedent)),
	array('label'=>'Delete Intecedent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIntecedent),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Intecedent', 'url'=>array('admin')),
);
?>

<h1>View Intecedent #<?php echo $model->idIntecedent; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idIntecedent',
		'Naam',
		'Adres',
		'Woonplaats',
		'Telefoon',
		'EMail',
		'Geslacht',
		'IsBeheerder',
		'Vestiging_idVestiging',
	),
)); ?>
