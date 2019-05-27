<?php 

require_once("config.php");

//carrega um usuario
//$root = new Usuarios();
//$root->loadById(2);

//echo $root;

//carrega uma lista de usuario

//$lista = Usuarios::getList();
//echo json_encode($lista);


//carrea uma lista de usuarios, buscando pelo login
//$search = Usuarios::search("e");

//echo json_encode($search);

//carrega um usuario usando login e senha
$usuario = new Usuarios();
$usuario->login("clemilson1107", "30231112");

echo $usuario;

 ?>