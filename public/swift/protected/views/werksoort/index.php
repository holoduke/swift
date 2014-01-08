<?php
/* @var $this WerksoortController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Werksoorts',
);

$this->menu=array(
	array('label'=>'Create Werksoort', 'url'=>array('create')),
	array('label'=>'Manage Werksoort', 'url'=>array('admin')),
);
?>

<h1>Werksoorts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
