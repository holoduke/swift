<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs=array(
	'Vestigingen'=>array('admin'),
	'Maak Vestiging',
);

$this->menu=array(
	array('label'=>'Meer informatie', 'url'=>array('index')),
   array('label'=>'Maak Vestiging', 'url'=>array('create')),
	array('label'=>'Beheer Vestiging', 'url'=>array('admin')),
);
?>

<h1>Maak Vestiging</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>