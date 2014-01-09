<?php
/* @var $this JobfunctieController */
/* @var $model Jobfunctie */

$this->breadcrumbs=array(
	'Jobfuncties'=>array('index'),
	$model->idJobFunctie=>array('view','id'=>$model->idJobFunctie),
	'Update',
);

$this->menu=array(
	array('label'=>'Lijst Jobfuncties', 'url'=>array('index')),
	array('label'=>'Maak Jobfunctie', 'url'=>array('create')),
	array('label'=>'Bekijk Jobfunctie', 'url'=>array('view', 'id'=>$model->idJobFunctie)),
	array('label'=>'Beheer Jobfunctie', 'url'=>array('admin')),
);
?>

<h1>Update Jobfunctie <?php echo $model->idJobFunctie; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>