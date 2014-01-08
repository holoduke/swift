<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */

$this->breadcrumbs=array(
	'Uitzendkrachts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Uitzendkracht', 'url'=>array('index')),
	array('label'=>'Manage Uitzendkracht', 'url'=>array('admin')),
);
?>

<h1>Create Uitzendkracht</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>