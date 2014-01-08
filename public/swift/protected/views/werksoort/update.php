<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */

$this->breadcrumbs=array(
	'Werksoorts'=>array('index'),
	$model->idWerkSoort=>array('view','id'=>$model->idWerkSoort),
	'Update',
);

$this->menu=array(
	array('label'=>'List Werksoort', 'url'=>array('index')),
	array('label'=>'Create Werksoort', 'url'=>array('create')),
	array('label'=>'View Werksoort', 'url'=>array('view', 'id'=>$model->idWerkSoort)),
	array('label'=>'Manage Werksoort', 'url'=>array('admin')),
);
?>

<h1>Update Werksoort <?php echo $model->idWerkSoort; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>