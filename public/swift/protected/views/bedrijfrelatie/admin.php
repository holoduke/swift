<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE abiword PUBLIC "-//ABISOURCE//DTD AWML 1.0 Strict//EN" "http://www.abisource.com/awml.dtd">
<abiword template="false" xmlns:ct="http://www.abisource.com/changetracking.dtd" xmlns:fo="http://www.w3.org/1999/XSL/Format" xmlns:math="http://www.w3.org/1998/Math/MathML" xid-max="60" xmlns:dc="http://purl.org/dc/elements/1.1/" fileformat="1.1" xmlns:svg="http://www.w3.org/2000/svg" xmlns:awml="http://www.abisource.com/awml.dtd" xmlns="http://www.abisource.com/awml.dtd" xmlns:xlink="http://www.w3.org/1999/xlink" version="3.0.0" xml:space="preserve" props="dom-dir:ltr; document-footnote-restart-section:0; document-endnote-type:numeric; document-endnote-place-enddoc:1; document-endnote-initial:1; lang:en-US; document-endnote-restart-section:0; document-footnote-restart-page:0; document-footnote-type:numeric; document-footnote-initial:1; document-endnote-place-endsection:0">
<!-- ======================================================================== -->
<!-- This file is an AbiWord document.                                        -->
<!-- AbiWord is a free, Open Source word processor.                           -->
<!-- More information about AbiWord is available at http://www.abisource.com/ -->
<!-- You should not edit this file by hand.                                   -->
<!-- ======================================================================== -->

<metadata>
<m key="abiword.date_last_changed">Thu Jan  9 19:26:16 2014
</m>
<m key="abiword.generator">AbiWord</m>
<m key="dc.date">Thu Jan  9 19:26:16 2014
</m>
<m key="dc.format">application/x-abiword</m>
</metadata>
<rdf>
</rdf>
<history version="2" edit-time="70" last-saved="1389291976" uid="5d754c54-795b-11e3-9fd6-b5f50209a73c">
<version id="2" started="1389291957" uid="86e34096-795b-11e3-9fd6-b5f50209a73c" auto="0" top-xid="0"/>
</history>
<styles>
<s type="P" name="Normal" basedon="" followedby="Current Settings" props="font-family:Liberation Serif; margin-top:0pt; font-variant:normal; margin-left:0pt; text-indent:0in; widows:2; font-style:normal; font-weight:normal; text-decoration:none; color:000000; line-height:1.0; text-align:left; margin-bottom:0pt; text-position:normal; margin-right:0pt; bgcolor:transparent; font-size:12pt; font-stretch:normal"/>
</styles>
<pagesize pagetype="A4" orientation="portrait" width="210.000000" height="297.000000" units="mm" page-scale="1.000000"/>
<section xid="1">
<p style="Normal" xid="2" props="text-align:left; dom-dir:ltr">&lt;?php</p>
<p style="Normal" xid="3" props="text-align:left; dom-dir:ltr">/* @var $this BedrijfrelatieController */</p>
<p style="Normal" xid="4" props="text-align:left; dom-dir:ltr">/* @var $model Bedrijfrelatie */</p>
<p style="Normal" xid="5"><c></c></p>
<p style="Normal" xid="6" props="text-align:left; dom-dir:ltr">$this-&gt;breadcrumbs=array(</p>
<p style="Normal" xid="7" props="text-align:left; dom-dir:ltr">	'Bedrijfrelaties'=&gt;array('index'),</p>
<p style="Normal" xid="8" props="text-align:left; dom-dir:ltr">	'Manage',</p>
<p style="Normal" xid="9">);</p>
<p style="Normal" xid="10"><c></c></p>
<p style="Normal" xid="11" props="text-align:left; dom-dir:ltr">$this-&gt;menu=array(</p>
<p style="Normal" xid="12" props="text-align:left; dom-dir:ltr">	array('label'=&gt;'Lijstweergave Bedrijfrelatie', 'url'=&gt;array('index')),</p>
<p style="Normal" xid="13" props="text-align:left; dom-dir:ltr">	array('label'=&gt;'Maak Bedrijfrelatie', 'url'=&gt;array('create')),</p>
<p style="Normal" xid="14">);</p>
<p style="Normal" xid="15"><c></c></p>
<p style="Normal" xid="16" props="text-align:left; dom-dir:ltr">Yii::app()-&gt;clientScript-&gt;registerScript('search', "</p>
<p style="Normal" xid="17" props="text-align:left; dom-dir:ltr">$('.search-button').click(function(){</p>
<p style="Normal" xid="18" props="text-align:left; dom-dir:ltr">	$('.search-form').toggle();</p>
<p style="Normal" xid="19" props="text-align:left; dom-dir:ltr">	return false;</p>
<p style="Normal" xid="20">});</p>
<p style="Normal" xid="21" props="text-align:left; dom-dir:ltr">$('.search-form form').submit(function(){</p>
<p style="Normal" xid="22" props="text-align:left; dom-dir:ltr">	$('#bedrijfrelatie-grid').yiiGridView('update', {</p>
<p style="Normal" xid="23" props="text-align:left; dom-dir:ltr">		data: $(this).serialize()</p>
<p style="Normal" xid="24">	});</p>
<p style="Normal" xid="25" props="text-align:left; dom-dir:ltr">	return false;</p>
<p style="Normal" xid="26">});</p>
<p style="Normal" xid="27">");</p>
<p style="Normal" xid="28">?&gt;</p>
<p style="Normal" xid="29"><c></c></p>
<p style="Normal" xid="30" props="text-align:left; dom-dir:ltr">&lt;h1&gt;Manage Bedrijfrelaties&lt;/h1&gt;</p>
<p style="Normal" xid="31"><c></c></p>
<p style="Normal" xid="32" props="text-align:left; dom-dir:ltr">&lt;p&gt;</p>
<p style="Normal" xid="33" props="text-align:left; dom-dir:ltr">You may optionally enter a comparison operator (&lt;b&gt;&amp;lt;&lt;/b&gt;, &lt;b&gt;&amp;lt;=&lt;/b&gt;, &lt;b&gt;&amp;gt;&lt;/b&gt;, &lt;b&gt;&amp;gt;=&lt;/b&gt;, &lt;b&gt;&amp;lt;&amp;gt;&lt;/b&gt;</p>
<p style="Normal" xid="34" props="text-align:left; dom-dir:ltr">or &lt;b&gt;=&lt;/b&gt;) at the beginning of each of your search values to specify how the comparison should be done.</p>
<p style="Normal" xid="35" props="text-align:left; dom-dir:ltr">&lt;/p&gt;</p>
<p style="Normal" xid="36"><c></c></p>
<p style="Normal" xid="37" props="text-align:left; dom-dir:ltr">&lt;?php echo CHtml::link('Advanced Search','#',array('class'=&gt;'search-button')); ?&gt;</p>
<p style="Normal" xid="38" props="text-align:left; dom-dir:ltr">&lt;div class="search-form" style="display:none"&gt;</p>
<p style="Normal" xid="39" props="text-align:left; dom-dir:ltr">&lt;?php $this-&gt;renderPartial('_search',array(</p>
<p style="Normal" xid="40" props="text-align:left; dom-dir:ltr">	'model'=&gt;$model,</p>
<p style="Normal" xid="41">)); ?&gt;</p>
<p style="Normal" xid="42" props="text-align:left; dom-dir:ltr">&lt;/div&gt;&lt;!-- search-form --&gt;</p>
<p style="Normal" xid="43"><c></c></p>
<p style="Normal" xid="44" props="text-align:left; dom-dir:ltr">&lt;?php $this-&gt;widget('zii.widgets.grid.CGridView', array(</p>
<p style="Normal" xid="45" props="text-align:left; dom-dir:ltr">	'id'=&gt;'bedrijfrelatie-grid',</p>
<p style="Normal" xid="46" props="text-align:left; dom-dir:ltr">	'dataProvider'=&gt;$model-&gt;search(),</p>
<p style="Normal" xid="47" props="text-align:left; dom-dir:ltr">	'filter'=&gt;$model,</p>
<p style="Normal" xid="48" props="text-align:left; dom-dir:ltr">	'columns'=&gt;array(</p>
<p style="Normal" xid="49" props="text-align:left; dom-dir:ltr">		'idBedrijfRelatie',</p>
<p style="Normal" xid="50" props="text-align:left; dom-dir:ltr">		'Naam',</p>
<p style="Normal" xid="51" props="text-align:left; dom-dir:ltr">		'Adres',</p>
<p style="Normal" xid="52" props="text-align:left; dom-dir:ltr">		'Postcode',</p>
<p style="Normal" xid="53" props="text-align:left; dom-dir:ltr">		'Woonplaats',</p>
<p style="Normal" xid="54" props="text-align:left; dom-dir:ltr">		'KVKId',</p>
<p style="Normal" xid="55" props="text-align:left; dom-dir:ltr">		array(</p>
<p style="Normal" xid="56" props="text-align:left; dom-dir:ltr">			'class'=&gt;'CButtonColumn',</p>
<p style="Normal" xid="57">		),</p>
<p style="Normal" xid="58">	),</p>
<p style="Normal" xid="59">)); ?&gt;</p>
<p style="Normal" xid="60"></p>
</section>
</abiword>
