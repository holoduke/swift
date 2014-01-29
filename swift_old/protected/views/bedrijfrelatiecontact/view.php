<?php
/* @var $this BedrijfrelatiecontactController */
/* @var $model Bedrijfrelatiecontact */

$this->breadcrumbs = array(
    'Bedrijfrelatiecontacten' => array('index'),
    $model->idBedrijfRelatieContact,
);

$this->menu = array(
    array('label' => 'Lijst Bedrijfrelatiecontacten', 'url' => array('index')),
    array('label' => 'Maak Bedrijfrelatiecontact', 'url' => array('create')),
    array('label' => 'Beheer Bedrijfrelatiecontact', 'url' => array('admin')),
    array('label' => 'Update Bedrijfrelatiecontact', 'url' => array('update', 'id' => $model->idBedrijfRelatieContact)),
    array('label' => 'Verwijder Bedrijfrelatiecontact', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idBedrijfRelatieContact), 'confirm' => 'Weet je het zeker?')),
);
?>

<h1>View Bedrijfrelatiecontact #<?php echo $model->idBedrijfRelatieContact; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
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
));
?>
