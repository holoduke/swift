<?php /* @var $this Controller */ 

   Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="language" content="en" />

      <!-- blueprint CSS framework -->

      <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
         <!--[if lt IE 8]>
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
         <![endif]-->

         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css"/>

         <style>
            body{
               font-family: 'Source Sans Pro', sans-serif;
            }

         </style>

         <title><?php echo CHtml::encode($this->pageTitle); ?></title>
   </head>

   <body>

      <div class="container" id="page">

         <div id="header">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/swift.png"></img>
         </div><!-- header -->

         <div id="mainmenu">
            <?php
            $this->widget('application.extensions.mbmenu.MbMenu', array(
                'items' => array(
                    array('label' => 'Beheer', 'url' => array('/vestiging/admin'), 'visible/admin' => !Yii::app()->user->isGuest, 'items' => array(
                            array('label' => 'Vestigingen', 'url' => array('/vestiging/admin'), 'visible' => !Yii::app()->user->isGuest),
                            array('label' => 'Intecedenten', 'url' => array('/intecedent/admin'), 'visible' => !Yii::app()->user->isGuest),
                            array('label' => 'Werksoorten', 'url' => array('/Werksoort/admin'), 'visible' => !Yii::app()->user->isGuest),
                        )),
                    array('label' => 'Uitzendkrachten', 'url' => array('/uitzendkracht'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Bedrijven', 'url' => array('/Bedrijfrelatie'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Contactpersonen', 'url' => array('/Bedrijfrelatiecontact'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Jobs', 'url' => array('/Jobfunctie'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Contracten', 'url' => array('/Contract'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                ),
            ));
            ?>
         </div><!-- mainmenu -->
         <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            ));
            ?><!-- breadcrumbs -->
         <?php endif ?>

         <?php echo $content; ?>

         <div class="clear"></div>

         <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
         </div><!-- footer -->

      </div><!-- page -->

   </body>
</html>
