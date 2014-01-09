<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bedrijfrelatiecontacten',
);

$this->menu=array(
	array('label'=>'Maak Bedrijfrelatiecontact', 'url'=>array('create')),
	array('label'=>'Beheer Bedrijfrelatiecontact', 'url'=>array('admin')),
);
?>

<h1>Bedrijfrelatiecontacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
