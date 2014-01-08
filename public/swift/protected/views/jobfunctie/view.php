<?php
/* @var $this JobfunctieController */
/* @var $model Jobfunctie */

$this->breadcrumbs=array(
	'Jobfuncties'=>array('index'),
	$model->idJobFunctie,
);

$this->menu=array(
	array('label'=>'List Jobfunctie', 'url'=>array('index')),
	array('label'=>'Create Jobfunctie', 'url'=>array('create')),
	array('label'=>'Update Jobfunctie', 'url'=>array('update', 'id'=>$model->idJobFunctie)),
	array('label'=>'Delete Jobfunctie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idJobFunctie),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jobfunctie', 'url'=>array('admin')),
);
?>

<h1>View Jobfunctie #<?php echo $model->idJobFunctie; ?></h1>

<?php echo CHtml::link('Zoek geschikte uitzendkrachten', array('Jobfunctie/findresources','id' => $model->idJobFunctie)); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idJobFunctie',
		'AantalPersonen',
		'StartDatum',
		'Uren',
		'UurTarief',
		array(               // related city displayed as a link
            'label'=>'WerkSoort',
            'type'=>'raw',
            'value'=>Werksoort::model()->findByPk($model->WerkSoort_idWerkSoort)->Naam
        ),
	),
));
?>