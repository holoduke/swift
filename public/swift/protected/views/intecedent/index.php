<?php
/* @var $this IntecedentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Intecedents',
);

$this->menu=array(
	array('label'=>'Create Intecedent', 'url'=>array('create')),
	array('label'=>'Manage Intecedent', 'url'=>array('admin')),
);
?>

<h1>Intecedents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
