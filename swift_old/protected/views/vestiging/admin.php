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

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vestiging-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Beheer Vestigingen</h1>


<?php
/*
<?php echo CHtml::link('Geavanceerd zoeken','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
*/
?>

<div id="tabs">
  <ul>
    <li><a href="#fragment-1">Actief</a></li>
    <li><a href="#fragment-2">Inactief</a></li>
  </ul>
  <div id="fragment-1">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vestiging-grid',
	'dataProvider'=>$model->searchInactive(),
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
	'dataProvider'=>$model->search(),
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



