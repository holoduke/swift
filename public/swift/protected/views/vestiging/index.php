<?php
/* @var $this VestigingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vestigingen',
);

$this->menu=array(
	array('label'=>'Maak Vestiging', 'url'=>array('create')),
	array('label'=>'Beheer Vestiging', 'url'=>array('admin')),
);
?>

<h1>Vestigingsbeheer</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
