<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */

$this->breadcrumbs=array(
	'Bedrijfrelatiecontacten'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lijst Bedrijfrelatiecontacten', 'url'=>array('index')),
	array('label'=>'Beheer Bedrijfrelatiecontact', 'url'=>array('admin')),
);
?>

<h1>Create Bedrijfrelatiecontact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>