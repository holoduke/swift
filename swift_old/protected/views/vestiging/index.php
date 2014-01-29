<?php
/* @var $this VestigingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Meer informatie',
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
   array('label'=>'Maak Vestiging', 'url'=>array('create')),
	array('label'=>'Beheer Vestiging', 'url'=>array('admin')),
);
?>

<h1>Meer informatie</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
