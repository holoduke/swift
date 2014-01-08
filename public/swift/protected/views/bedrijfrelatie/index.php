<?php
/* @var $this BedrijfrelatieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bedrijfrelaties',
);

$this->menu=array(
	array('label'=>'Create Bedrijfrelatie', 'url'=>array('create')),
	array('label'=>'Manage Bedrijfrelatie', 'url'=>array('admin')),
);
?>

<h1>Bedrijfrelaties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
