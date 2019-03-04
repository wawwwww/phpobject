<?php 


function autoloader_perso($className){
	var_dump($className);
	require_once ('Class/' . $className . '.php');
	
	
}
spl_autoload_register('autoloader_perso');
echo "bonjour";

$parasol = new Product();
var_dump($parasol);
$parasol->name = 'parasol';
$parasol->description = 'pour faire de l\'ombre';
$parasol->price = '150';
var_dump($parasol);


$hammac = new Product();
var_dump($hammac);
$hammac->name = 'hammac';
$hammac->description = 'se reposer';
$hammac->price = '15.99';
var_dump($hammac);











$voyage = new Category();




echo '<p>' . $parasol->price . '</p>';
echo '<p>' . $hammac::DEFAULT_NB_VIEWS  . '</p>';


 ?>