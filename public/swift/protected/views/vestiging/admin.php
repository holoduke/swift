<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigingen'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
   array('label'=>'Maak Vestiging', 'url'=>array('create')),
	array('label'=>'Beheer Vestiging', 'url'=>array('admin')),
);
?>

<h1>Beheer Vestigingen</h1>

<div id="tabs">
  <ul>
    <li><a href="#fragment-1">Actief</a></li>
    <li><a href="#fragment-2">Inactief</a></li>
  </ul>
  <div id="fragment-1">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vestiging-grid',
	'dataProvider'=>$model->search(0),
	'filter'=>$model,
	'columns'=>array(
		'idVestiging',
		'Naam',
		'Adres',
		'Postcode',
		'Woonplaats',
		'Telefoon',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
  </div>
  <div id="fragment-2">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vestiging-grid2',
	'dataProvider'=>$model->search(1),
	'filter'=>$model,
	'columns'=>array(
		'idVestiging',
		'Naam',
		'Adres',
		'Postcode',
		'Woonplaats',
		'Telefoon',
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



