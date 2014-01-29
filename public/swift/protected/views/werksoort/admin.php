<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */

$this->breadcrumbs=array(
	'Werksoorten'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
	array('label'=>'Maak Werksoort', 'url'=>array('create')),
	array('label'=>'Beheer Werksoort', 'url'=>array('admin')),
);
?>

<h1>Beheer Werksoorten</h1>

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
		'idWerkSoort',
		'Naam',
		'Omschrijving',
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
		'idWerkSoort',
		'Naam',
		'Omschrijving',
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