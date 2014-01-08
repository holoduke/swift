<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */

$this->breadcrumbs=array(
	'Werksoorts'=>array('index'),
	$model->idWerkSoort,
);

$this->menu=array(
	array('label'=>'List Werksoort', 'url'=>array('index')),
	array('label'=>'Create Werksoort', 'url'=>array('create')),
	array('label'=>'Update Werksoort', 'url'=>array('update', 'id'=>$model->idWerkSoort)),
	array('label'=>'Delete Werksoort', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idWerkSoort),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Werksoort', 'url'=>array('admin')),
);
?>

<h1>View Werksoort #<?php echo $model->idWerkSoort; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idWerkSoort',
		'Naam',
		'Omschrijving',
	),
)); ?>
