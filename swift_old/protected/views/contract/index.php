<?php
/* @var $this ContractController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Contracten',
);

$this->menu = array(
    array('label' => 'Lijst Contracten', 'url' => array('index')),
    array('label' => 'Maak Contract', 'url' => array('create')),
    array('label' => 'Beheer Contract', 'url' => array('admin')),
);
?>

<h1>Contracts</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
