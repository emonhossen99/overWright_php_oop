<?php 
include('calling.php');

$firstExtends = new RollManagement();
$firstExtends->setName("Md"); 
echo $firstExtends ->getName()."</br>";


$secondExtends = new PositionManagement();
$secondExtends->setName("Emon"); 
echo $secondExtends ->getName()."</br>";

$thirdExtends = new TitleManagement();
$thirdExtends->setName("Hossen"); 
echo $thirdExtends ->getName()."</br>";




?>