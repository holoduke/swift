<?php
/* @var $this BedrijfrelatieController */
/* @var $model Bedrijfrelatie */

$this->breadcrumbs=array(
	'Bedrijfrelaties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bedrijfrelatie', 'url'=>array('index')),
	array('label'=>'Manage Bedrijfrelatie', 'url'=>array('admin')),
);
?>

<h1>Create Bedrijfrelatie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>