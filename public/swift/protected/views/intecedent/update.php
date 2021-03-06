<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */

$this->breadcrumbs=array(
	'Intecedenten'=>array('index'),
	$model->idIntecedent=>array('view','id'=>$model->idIntecedent),
	'Update',
);

$this->menu=array(
	array('label'=>'Lijst Intecedenten', 'url'=>array('index')),
	array('label'=>'Maak Intecedent', 'url'=>array('create')),
	array('label'=>'Beheer Intecedent', 'url'=>array('admin')),

    array('label'=>'View Intecedent', 'url'=>array('view', 'id'=>$model->idIntecedent)),
);
?>

<h1>Update Intecedent <?php echo $model->idIntecedent; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>