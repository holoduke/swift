<?php
/* @var $this ContractController */
/* @var $model Contract */

$this->breadcrumbs=array(
	'Contracten'=>array('index'),
	$model->idContract,
);

$this->menu=array(
	array('label'=>'Lijst Contract', 'url'=>array('index')),
	array('label'=>'Maak Contract', 'url'=>array('create')),
	array('label'=>'Beheer Contract', 'url'=>array('admin')),
	array('label'=>'Update Contract', 'url'=>array('update', 'id'=>$model->idContract)),
	array('label'=>'Verwijder Contract', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idContract),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Contract #<?php echo $model->idContract; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idContract',
		'StartDatum',
		'UurTarief',
		'UurLoon',
		'JobFunctie_idJobFunctie',
		'BedrijfRelatie_idBedrijfRelatie',
		'Uitzendkracht_idUitzendkracht',
		'Intecedent_idIntecedent',
	),
)); ?>
