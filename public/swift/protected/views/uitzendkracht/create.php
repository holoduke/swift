<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */

$this->breadcrumbs=array(
	'Uitzendkrachten'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lijst Uitzendkrachten', 'url'=>array('index')),
	array('label'=>'Beheer Uitzendkracht', 'url'=>array('admin')),
);
?>

<h1>Create Uitzendkracht</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>