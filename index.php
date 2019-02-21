<?php 

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); 
*/

//Carrega um usuário apenas
//$carlos = new Usuario();
//$carlos->loadById(2);
//echo $carlos;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$busca = Usuario::search("os");
//echo json_encode($busca);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("user", "1245");
echo $usuario;

?>