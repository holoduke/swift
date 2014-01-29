<?php
/* @var $this JobfunctieController */
/* @var $model Jobfunctie */

$this->breadcrumbs = array(
    'Jobfuncties' => array('index'),
    $model->idJobFunctie => array('view', 'id' => $model->idJobFunctie),
    'Find Resources',
);

$this->menu = array(
    array('label' => 'Lijst Jobfuncties', 'url' => array('index')),
    array('label' => 'Maak Jobfunctie', 'url' => array('create')),
    array('label' => 'Beheer Jobfunctie', 'url' => array('admin')),
    array('label' => 'Update Jobfunctie', 'url' => array('update', 'id' => $model->idJobFunctie)),
    array('label' => 'Delete Jobfunctie', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idJobFunctie), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>View Jobfunctie #<?php echo $model->idJobFunctie; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idJobFunctie',
        'AantalPersonen',
        'StartDatum',
        'Uren',
        'UurTarief',
        array(// related city displayed as a link
            'label' => 'WerkSoort',
            'type' => 'raw',
            'value' => Werksoort::model()->findByPk($model->WerkSoort_idWerkSoort)->Naam
        ),
    ),
));
?>
<table>
   <thead>
      <tr>
         <td>Id</td>
         <td>Naam</td>
         <td>Score</td>
         <td>Contract</td>
      </tr>
   </thead>
   <tbody>
      <?php
      foreach ($uitzendlijst as $key => $value) {
         echo('<tr class="' . (($key % 2) == 0 ? 'even' : 'odd') . '">');
         echo('<td>' . $value['Id'] . '</td>');
         echo('<td>' . $value['Naam'] . '</td>');
         echo('<td>' . $value['Score'] . '</td>');
         echo('<td>' . CHtml::link('Bied een contract aan', array('contract/create', 'idUitzendKracht' => $value['Id'], 'idJob' => $model->idJobFunctie)) . '</td>');
         echo('</tr>');
      }
      ?>
   </tbody>
</table>