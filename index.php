<?php 

require_once("config.php");

$root = new Usuarios();
$root->loadById(2);

echo $root;

 ?>