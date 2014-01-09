<?php
/* @var $this IntecedentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Intecedenten',
);

$this->menu=array(
	array('label'=>'Maak Intecedent', 'url'=>array('create')),
	array('label'=>'Beheer Intecedent', 'url'=>array('admin')),
);
?>

<h1>Intecedents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
