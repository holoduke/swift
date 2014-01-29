<?php
/* @var $this BedrijfrelatieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Bedrijfrelaties',
);

$this->menu = array(
    array('label' => 'Lijst Bedrijfrelatie', 'url' => array('index')),
    array('label' => 'Maak Bedrijfrelatie', 'url' => array('create')),
    array('label' => 'Beheer Bedrijfrelatie', 'url' => array('admin')),
);
?>

<h1>Bedrijfrelaties</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
