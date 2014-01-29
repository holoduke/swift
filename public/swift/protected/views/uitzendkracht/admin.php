<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */

$this->breadcrumbs=array(
	'Uitzendkrachten'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
	array('label'=>'Maak Uitzendkracht', 'url'=>array('create')),
	array('label'=>'Beheer Uitzendkracht', 'url'=>array('admin')),
);
?>

<h1>Beheer Uitzendkrachten</h1>


<div id="tabs">
  <ul>
    <li><a href="#fragment-1">Actief</a></li>
    <li><a href="#fragment-2">Inactief</a></li>
  </ul>
  <div id="fragment-1">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vestiging-grid',
	'dataProvider'=>$model->search(1),
	'filter'=>$model,
	'columns'=>array(
		'idUitzendkracht',
		'Naam',
		'Geslacht',
		'GeboorteDatum',
		'Adres',
		'Postcode',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
  </div>
  <div id="fragment-2">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vestiging-grid2',
	'dataProvider'=>$model->search(0),
	'filter'=>$model,
	'columns'=>array(
		'idUitzendkracht',
		'Naam',
		'Geslacht',
		'GeboorteDatum',
		'Adres',
		'Postcode',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
  </div>
</div>

<script>
$( "#tabs" ).tabs({ active: 0 });
</script>