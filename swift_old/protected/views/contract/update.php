<?php
/* @var $this ContractController */
/* @var $model Contract */

$this->breadcrumbs=array(
	'Contracten'=>array('index'),
	$model->idContract=>array('view','id'=>$model->idContract),
	'Update',
);

$this->menu=array(
	array('label'=>'Lijst Contracten', 'url'=>array('index')),
	array('label'=>'Maak Contract', 'url'=>array('create')),
	array('label'=>'Beheer Contract', 'url'=>array('admin')),
	array('label'=>'Bekijk Contract', 'url'=>array('view', 'id'=>$model->idContract)),
);
?>

<h1>Update Contract <?php echo $model->idContract; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>