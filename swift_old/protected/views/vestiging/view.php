<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs = array(
    'Vestigingen' => array('admin'),
    $model->Naam,
);

$this->menu = array(
    array('label' => 'Lijst weergave', 'url' => array('index')),
    array('label' => 'Maak Vestiging', 'url' => array('create')),
    array('label' => 'Beheer Vestiging', 'url' => array('admin')),
    array('label' => 'Update Vestiging', 'url' => array('update', 'id' => $model->idVestiging)),
    array('label' => 'Verwijder Vestiging', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idVestiging), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>Bekijk Vestiging <?php echo $model->Naam; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array_keys($model->attributeLabels()),
));
?>
