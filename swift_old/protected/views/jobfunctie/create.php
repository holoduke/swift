<?php
/* @var $this JobfunctieController */
/* @var $model Jobfunctie */

$this->breadcrumbs=array(
	'Jobfuncties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lijst Jobfuncties', 'url'=>array('index')),
	array('label'=>'Maak Jobfunctie', 'url'=>array('create')),
	array('label'=>'Beheer Jobfunctie', 'url'=>array('admin')),
);
?>

<h1>Create Jobfunctie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>