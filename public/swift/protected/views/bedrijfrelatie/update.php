<?php
/* @var $this BedrijfrelatieController */
/* @var $model Bedrijfrelatie */

$this->breadcrumbs=array(
	'Bedrijfrelaties'=>array('index'),
	$model->idBedrijfRelatie=>array('view','id'=>$model->idBedrijfRelatie),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bedrijfrelatie', 'url'=>array('index')),
	array('label'=>'Create Bedrijfrelatie', 'url'=>array('create')),
	array('label'=>'View Bedrijfrelatie', 'url'=>array('view', 'id'=>$model->idBedrijfRelatie)),
	array('label'=>'Manage Bedrijfrelatie', 'url'=>array('admin')),
);
?>

<h1>Update Bedrijfrelatie <?php echo $model->idBedrijfRelatie; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>