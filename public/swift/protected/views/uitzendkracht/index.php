<?php
/* @var $this UitzendkrachtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uitzendkrachts',
);

$this->menu=array(
	array('label'=>'Create Uitzendkracht', 'url'=>array('create')),
	array('label'=>'Manage Uitzendkracht', 'url'=>array('admin')),
);
?>

<h1>Uitzendkrachts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
