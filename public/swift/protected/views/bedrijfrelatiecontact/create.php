<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */

$this->breadcrumbs=array(
	'Bedrijfrelatiecontacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bedrijfrelatiecontact', 'url'=>array('index')),
	array('label'=>'Manage Bedrijfrelatiecontact', 'url'=>array('admin')),
);
?>

<h1>Create Bedrijfrelatiecontact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>