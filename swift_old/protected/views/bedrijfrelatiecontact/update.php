<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */

$this->breadcrumbs = array(
    'Bedrijfrelatiecontacten' => array('index'),
    $model->idBedrijfRelatieContact => array('view', 'id' => $model->idBedrijfRelatieContact),
    'Update',
);

$this->menu = array(
    array('label' => 'Lijst Bedrijfrelatiecontacten', 'url' => array('index')),
    array('label' => 'Maak Bedrijfrelatiecontact', 'url' => array('create')),
    array('label' => 'Beheer Bedrijfrelatiecontact', 'url' => array('admin')),
    array('label' => 'Bekijk Bedrijfrelatiecontact', 'url' => array('view', 'id' => $model->idBedrijfRelatieContact)),
);
?>

<h1>Update Bedrijfrelatiecontact <?php echo $model->idBedrijfRelatieContact; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>