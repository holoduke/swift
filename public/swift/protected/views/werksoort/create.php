<?php
/* @var $this WerksoortController */
/* @var $model Werksoort */

$this->breadcrumbs=array(
	'Werksoorts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lijst weergave', 'url'=>array('index')),
	array('label'=>'Beheer werksoorten', 'url'=>array('admin')),
);
?>

<h1>Maak Werksoort</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>