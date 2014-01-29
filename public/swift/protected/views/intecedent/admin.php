<?php
/* @var $this IntecedentController */
/* @var $model Intecedent */

$this->breadcrumbs = array(
    'Intecedenten' => array('admin'),
);

$this->menu = array(
    array('label' => 'Meer informatie', 'url' => array('index')),
    array('label' => 'Maak Intecedent', 'url' => array('create')),
    array('label' => 'Beheer Intecedent', 'url' => array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#intecedent-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Beheer Intecedenten</h1>

<div id="tabs">
   <ul>
      <li><a href="#fragment-1">Actief</a></li>
      <li><a href="#fragment-2">Inactief</a></li>
   </ul>
   <div id="fragment-1">
      <?php
      $this->widget('zii.widgets.grid.CGridView', array(
          'id' => 'vestiging-grid',
          'dataProvider' => $model->search(1),
          'filter' => $model,
          'columns' => array(
              'idIntecedent',
              'Naam',
              'Adres',
              'Woonplaats',
              'Telefoon',
              'EMail',
              array(
                  'class' => 'CButtonColumn',
              ),
          ),
      ));
      ?>
   </div>
   <div id="fragment-2">
      <?php
      $this->widget('zii.widgets.grid.CGridView', array(
          'id' => 'vestiging-grid2',
          'dataProvider' => $model->search(0),
          'filter' => $model,
          'columns' => array(
              'idIntecedent',
              'Naam',
              'Adres',
              'Woonplaats',
              'Telefoon',
              'EMail',
              array(
                  'class' => 'CButtonColumn',
              ),
          ),
      ));
      ?>
   </div>
</div>

<script>
   $("#tabs").tabs({active: 0});
</script>