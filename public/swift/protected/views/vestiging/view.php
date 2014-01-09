<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigings'=>array('index'),
	$model->idVestiging,
);

$this->menu=array(
	array('label'=>'Lijst weergave', 'url'=>array('index')),
	array('label'=>'Maak Vestiging', 'url'=>array('create')),
	array('label'=>'Update Vestiging', 'url'=>array('update', 'id'=>$model->idVestiging)),
	array('label'=>'Verwijder Vestiging', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVestiging),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Beheer Vestiging', 'url'=>array('admin')),
);
?>

<h1>Bekijk Vestiging #<?php echo $model->idVestiging; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVestiging',
		'Naam',
		'Adres',
		'Postcode',
		'Woonplaats',
		'Telefoon',
		'EMail',
	),
)); ?>
