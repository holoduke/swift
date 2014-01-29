<?php
/* @var $this JobfunctieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobfuncties',
);

$this->menu=array(
    array('label' => 'Lijst Jobfuncties', 'url' => array('index')),
    array('label' => 'Maak Jobfunctie', 'url' => array('create')),
    array('label' => 'Beheer Jobfunctie', 'url' => array('admin')),
);
?>

<h1>Jobfuncties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
