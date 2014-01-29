<?php
/* @var $this WerksoortController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Werksoorten',
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
	array('label'=>'Maak Werksoort', 'url'=>array('create')),
	array('label'=>'Beheer Werksoort', 'url'=>array('admin')),
);
?>

<h1>Werksoorts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
