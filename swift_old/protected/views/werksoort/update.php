<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */

$this->breadcrumbs=array(
	'Werksoorten'=>array('index'),
	$model->idWerkSoort=>array('view','id'=>$model->idWerkSoort),
	'Update',
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
	array('label'=>'Maak Werksoort', 'url'=>array('create')),
	array('label'=>'Beheer Werksoort', 'url'=>array('admin')),
	array('label'=>'Bekijk Werksoort', 'url'=>array('view', 'id'=>$model->idWerkSoort)),
);
?>

<h1>Update Werksoort <?php echo $model->idWerkSoort; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>