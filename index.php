<?php 

require_once("config.php");

//Carrega uma lista de usuarios
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega um usuario
/*$root = new Usuario();
$root->loadById(4);
echo $root;*/

//Carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("jo");
echo json_encode($search);*/

//Carrega um usuario usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("joao","124");

echo $usuario;*/

$aluno = new Usuario("aluno","@luno");

//Criando um novo usuario
/*$aluno->setDeslogin("aluno");
$aluno->setDessenha("@luno");
$aluno->insert();
echo $aluno;*/

//Alterar um usuario
/*$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("professor", "A@#!$$");
echo $usuario;*/


//Deletar usuario
$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;




?>