<?php
/* @var $this ContractController */
/* @var $model Contract */

$this->breadcrumbs=array(
	'Contracts'=>array('index'),
	$model->idContract=>array('view','id'=>$model->idContract),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contract', 'url'=>array('index')),
	array('label'=>'Create Contract', 'url'=>array('create')),
	array('label'=>'View Contract', 'url'=>array('view', 'id'=>$model->idContract)),
	array('label'=>'Manage Contract', 'url'=>array('admin')),
);
?>

<h1>Update Contract <?php echo $model->idContract; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>