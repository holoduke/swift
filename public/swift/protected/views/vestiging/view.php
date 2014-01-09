<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigings'=>array('index'),
	$model->idVestiging,
);

$this->menu=array(
	array('label'=>'List Vestiging', 'url'=>array('index')),
	array('label'=>'Create Vestiging', 'url'=>array('create')),
	array('label'=>'Update Vestiging', 'url'=>array('update', 'id'=>$model->idVestiging)),
	array('label'=>'Delete Vestiging', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVestiging),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vestiging', 'url'=>array('admin')),
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
