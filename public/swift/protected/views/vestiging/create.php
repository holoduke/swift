<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lijst weergave', 'url'=>array('index')),
	array('label'=>'Beheer Vestiging', 'url'=>array('admin')),
);
?>

<h1>Maak Vestiging</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>