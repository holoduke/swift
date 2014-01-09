<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */

$this->breadcrumbs=array(
	'Intecedenten'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lijst Intecedenten', 'url'=>array('index')),
	array('label'=>'Beheer Intecedent', 'url'=>array('admin')),
);
?>

<h1>Create Intecedent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>