<?php
/* @var $this ContractController */
/* @var $model Contract */

$this->breadcrumbs=array(
	'Contracts'=>array('index'),
	$model->idContract,
);

$this->menu=array(
	array('label'=>'List Contract', 'url'=>array('index')),
	array('label'=>'Create Contract', 'url'=>array('create')),
	array('label'=>'Update Contract', 'url'=>array('update', 'id'=>$model->idContract)),
	array('label'=>'Delete Contract', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idContract),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contract', 'url'=>array('admin')),
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
