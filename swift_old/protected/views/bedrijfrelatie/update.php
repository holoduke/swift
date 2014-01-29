<?php
/* @var $this BedrijfrelatieController */
/* @var $model Bedrijfrelatie */

$this->breadcrumbs = array(
    'Bedrijfrelaties' => array('index'),
    $model->idBedrijfRelatie => array('view', 'id' => $model->idBedrijfRelatie),
    'Update',
);

$this->menu = array(
    array('label' => 'Lijst Bedrijfrelatie', 'url' => array('index')),
    array('label' => 'Maak Bedrijfrelatie', 'url' => array('create')),
    array('label' => 'Beheer Bedrijfrelatie', 'url' => array('admin')),
    array('label' => 'Bekijk Bedrijfrelatie', 'url' => array('view', 'id' => $model->idBedrijfRelatie)),
);
?>

<h1>Update Bedrijfrelatie <?php echo $model->idBedrijfRelatie; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>