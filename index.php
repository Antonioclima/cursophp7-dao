<?php
 require_once("config.php");

// carrega um usuário
//$root = new Usuario();

//$root->loadById(3);

//echo $root;

//xxxxxxxx

//$sql = new Sql();

 //$usuarios = $sql->select("SELECT * FROM tb_usuarios");

 //echo json_encode($usuarios);


 //carrega uma lista de usuarios

// $lista = Usuario::getList();
// echo json_encode($lista);

 //carra uma lista buscando pelo login.

//$search = usuario::search("r");
//echo json_encode($search);

 //carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("user", "123456");

// echo $usuario;
/*Criando um novo usuario
 $aluno = new Usuario("aluno"," @lun0");

 $aluno->insert();

 echo $aluno;

*/
 /*
  // Alterar um usuario

 $usuario = new Usuario();

 $usuario->loadById(8);

 $usuario->update("professor","!@#$%¨&*");

 echo $usuario;
 */
 $usuario = new Usuario();

 $usuario->loadById(4);

 $usuario->delete();
 echo $usuario;


?>

