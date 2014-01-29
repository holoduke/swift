<?php
/* @var $this BedrijfrelatieController */
/* @var $model Bedrijfrelatie */

$this->breadcrumbs = array(
    'Bedrijfrelaties' => array('index'),
    $model->idBedrijfRelatie,
);

$this->menu = array(
    array('label' => 'Lijst Bedrijfrelatie', 'url' => array('index')),
    array('label' => 'Maak Bedrijfrelatie', 'url' => array('create')),
    array('label' => 'Beheer Bedrijfrelatie', 'url' => array('admin')),
    array('label' => 'Update Bedrijfrelatie', 'url' => array('update', 'id' => $model->idBedrijfRelatie)),
    array('label' => 'Verwijder Bedrijfrelatie', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idBedrijfRelatie), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>View Bedrijfrelatie #<?php echo $model->idBedrijfRelatie; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idBedrijfRelatie',
        'Naam',
        'Adres',
        'Postcode',
        'Woonplaats',
        'KVKId',
    ),
));
?>
