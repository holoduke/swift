<?php
/* @var $this VestigingController */
/* @var $model Vestiging */

$this->breadcrumbs = array(
    'Vestigingen' => array('admin'),
    $model->Naam => array('view', 'id' => $model->idVestiging),
    'Update',
);

$this->menu = array(
    array('label' => 'Lijst weergave', 'url' => array('index')),
    array('label' => 'Maak Vestiging', 'url' => array('create')),
    array('label' => 'Beheer Vestiging', 'url' => array('admin')),
    array('label' => 'Bekijk Vestiging', 'url' => array('view', 'id' => $model->idVestiging)),
);
?>

<h1>Update Vestiging <?php echo $model->Naam; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>