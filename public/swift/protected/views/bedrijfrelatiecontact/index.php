<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bedrijfrelatiecontacts',
);

$this->menu=array(
	array('label'=>'Create Bedrijfrelatiecontact', 'url'=>array('create')),
	array('label'=>'Manage Bedrijfrelatiecontact', 'url'=>array('admin')),
);
?>

<h1>Bedrijfrelatiecontacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
