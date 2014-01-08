<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vestiging', 'url'=>array('index')),
	array('label'=>'Manage Vestiging', 'url'=>array('admin')),
);
?>

<h1>Create Vestiging</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>