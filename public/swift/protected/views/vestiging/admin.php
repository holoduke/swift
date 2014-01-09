<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Vestiging', 'url'=>array('index')),
	array('label'=>'Create Vestiging', 'url'=>array('create')),
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



<?php echo CHtml::link('Geavanceerd zoeken','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vestiging-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idVestiging',
		'Naam',
		'Adres',
		'Postcode',
		'Woonplaats',
		'Telefoon',
		/*
		'EMail',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
