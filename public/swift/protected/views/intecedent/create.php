<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */

$this->breadcrumbs=array(
	'Intecedents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Intecedent', 'url'=>array('index')),
	array('label'=>'Manage Intecedent', 'url'=>array('admin')),
);
?>

<h1>Create Intecedent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>