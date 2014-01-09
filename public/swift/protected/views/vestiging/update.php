<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigings'=>array('index'),
	$model->idVestiging=>array('view','id'=>$model->idVestiging),
	'Update',
);

$this->menu=array(
	array('label'=>'Lijst weergave', 'url'=>array('index')),
	array('label'=>'Maak Vestiging', 'url'=>array('create')),
	array('label'=>'Bekijk Vestiging', 'url'=>array('view', 'id'=>$model->idVestiging)),
	array('label'=>'Beheer Vestiging', 'url'=>array('admin')),
);
?>

<h1>Update Vestiging <?php echo $model->idVestiging; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>