<?php
/* @var $this ContractController */
/* @var $model Contract */

$this->breadcrumbs=array(
	'Contracten'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lijst Contracten', 'url'=>array('index')),
	array('label'=>'Beheer Contract', 'url'=>array('admin')),
);
?>

<h1>Create Contract</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>