<?php
/* @var $this UitzendkrachtController */
/* @var $model Uitzendkracht */

$this->breadcrumbs=array(
	'Uitzendkrachten'=>array('index'),
	$model->idUitzendkracht=>array('view','id'=>$model->idUitzendkracht),
	'Update',
);

$this->menu=array(
	array('label'=>'Lijst Uitzendkracht', 'url'=>array('index')),
	array('label'=>'Maak Uitzendkracht', 'url'=>array('create')),
	array('label'=>'Beheer Uitzendkracht', 'url'=>array('admin')),
	array('label'=>'Bekijk Uitzendkracht', 'url'=>array('view', 'id'=>$model->idUitzendkracht)),
);
?>

<h1>Update Uitzendkracht <?php echo $model->idUitzendkracht; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>