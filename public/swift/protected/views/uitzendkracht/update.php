<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */

$this->breadcrumbs=array(
	'Uitzendkrachts'=>array('index'),
	$model->idUitzendkracht=>array('view','id'=>$model->idUitzendkracht),
	'Update',
);

$this->menu=array(
	array('label'=>'List Uitzendkracht', 'url'=>array('index')),
	array('label'=>'Create Uitzendkracht', 'url'=>array('create')),
	array('label'=>'View Uitzendkracht', 'url'=>array('view', 'id'=>$model->idUitzendkracht)),
	array('label'=>'Manage Uitzendkracht', 'url'=>array('admin')),
);
?>

<h1>Update Uitzendkracht <?php echo $model->idUitzendkracht; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>