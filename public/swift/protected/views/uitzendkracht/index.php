<?php
/* @var $this UitzendkrachtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uitzendkrachten',
);

$this->menu=array(
	array('label'=>'Maak Uitzendkracht', 'url'=>array('create')),
	array('label'=>'Beheer Uitzendkracht', 'url'=>array('admin')),
);
?>

<h1>Uitzendkrachts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
