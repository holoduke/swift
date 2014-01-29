<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */

$this->breadcrumbs=array(
	'Werksoorts'=>array('index'),
	$model->idWerkSoort,
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
	array('label'=>'Maak Werksoort', 'url'=>array('create')),
	array('label'=>'Beheer Werksoort', 'url'=>array('admin')),
	array('label'=>'Update Werksoort', 'url'=>array('update', 'id'=>$model->idWerkSoort)),
	array('label'=>'Verwijder Werksoort', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idWerkSoort),'confirm'=>'Weet je het zeker?')),
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
