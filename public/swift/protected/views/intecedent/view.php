<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */

$this->breadcrumbs=array(
	'Intecedenten'=>array('index'),
	$model->idIntecedent,
);

$this->menu=array(
	array('label'=>'Lijst Intecedente', 'url'=>array('index')),
	array('label'=>'Maak Intecedent', 'url'=>array('create')),
	array('label'=>'Update Intecedent', 'url'=>array('update', 'id'=>$model->idIntecedent)),
	array('label'=>'Verwijder Intecedent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIntecedent),'confirm'=>'Weet je het zeker?')),
	array('label'=>'Beheer Intecedent', 'url'=>array('admin')),
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
