<?php
/* @var $this VestigingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vestigingsbeheer',
);

$this->menu=array(
	array('label'=>'Create Vestiging', 'url'=>array('create')),
	array('label'=>'Manage Vestiging', 'url'=>array('admin')),
);
?>

<h1>Vestigingsbeheer</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
