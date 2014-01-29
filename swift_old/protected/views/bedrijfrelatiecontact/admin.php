<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */

$this->breadcrumbs=array(
	'Bedrijfrelatiecontacts'=>array('index'),
	'Manage',
);

$this->menu=array(
   array('label'=>'Lijst Bedrijfrelatiecontacten', 'url'=>array('index')),
	array('label'=>'Maak Bedrijfrelatiecontact', 'url'=>array('create')),
	array('label'=>'Beheer Bedrijfrelatiecontact', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bedrijfrelatiecontact-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bedrijfrelatiecontacts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bedrijfrelatiecontact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idBedrijfRelatieContact',
		'Voorletters',
		'Achternaam',
		'Geslacht',
		'Functie',
		'Telefoon',
		/*
		'EMail',
		'BedrijfRelatie_idBedrijfRelatie',
		'Intecedent_idIntecedent',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
