<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */

$this->breadcrumbs=array(
	'Bedrijfrelatiecontacts'=>array('index'),
	$model->idBedrijfRelatieContact=>array('view','id'=>$model->idBedrijfRelatieContact),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bedrijfrelatiecontact', 'url'=>array('index')),
	array('label'=>'Create Bedrijfrelatiecontact', 'url'=>array('create')),
	array('label'=>'View Bedrijfrelatiecontact', 'url'=>array('view', 'id'=>$model->idBedrijfRelatieContact)),
	array('label'=>'Manage Bedrijfrelatiecontact', 'url'=>array('admin')),
);
?>

<h1>Update Bedrijfrelatiecontact <?php echo $model->idBedrijfRelatieContact; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>