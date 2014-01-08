<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */

$this->breadcrumbs=array(
	'Bedrijfrelatiecontacts'=>array('index'),
	$model->idBedrijfRelatieContact,
);

$this->menu=array(
	array('label'=>'List Bedrijfrelatiecontact', 'url'=>array('index')),
	array('label'=>'Create Bedrijfrelatiecontact', 'url'=>array('create')),
	array('label'=>'Update Bedrijfrelatiecontact', 'url'=>array('update', 'id'=>$model->idBedrijfRelatieContact)),
	array('label'=>'Delete Bedrijfrelatiecontact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idBedrijfRelatieContact),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bedrijfrelatiecontact', 'url'=>array('admin')),
);
?>

<h1>View Bedrijfrelatiecontact #<?php echo $model->idBedrijfRelatieContact; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idBedrijfRelatieContact',
		'Voorletters',
		'Achternaam',
		'Geslacht',
		'Functie',
		'Telefoon',
		'EMail',
		'BedrijfRelatie_idBedrijfRelatie',
		'Intecedent_idIntecedent',
	),
)); ?>
