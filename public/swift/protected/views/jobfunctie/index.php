<?php
/* @var $this JobfunctieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobfuncties',
);

$this->menu=array(
	array('label'=>'Create Jobfunctie', 'url'=>array('create')),
	array('label'=>'Manage Jobfunctie', 'url'=>array('admin')),
);
?>

<h1>Jobfuncties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
