
<?php 
require_once "BarPlot.class.php";

$graph = new Graph(400,400);
$graph->setAntiAliasing(true);

$value= array(19,42,15, -25,3);
$splot= new BarPlot($value);
$splot->setBarColor(new Color(250,230,180));

$splot->setSpace(5,5,null,null);

$splot->barShadow->setSize(3);
$splot->barShadow->setPosition(Shadow::RIGHT_TOP);
$splot->barShadow->setColor(new Color(180,180,180,10));
$splot->barShadow->smooth(true);

$graph->add($splot);
$graph->draw();

 ?>


