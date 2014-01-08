<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */

$this->breadcrumbs=array(
	'Werksoorts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Werksoort', 'url'=>array('index')),
	array('label'=>'Manage Werksoort', 'url'=>array('admin')),
);
?>

<h1>Create Werksoort</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>