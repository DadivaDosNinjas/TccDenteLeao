<?php

include_once 'conexao/conecta.inc';
include_once 'classes/Bcrypt.class.php';
session_start();
$email =  isset($_POST['email'])? $_POST['email']:null;
$senha = isset($_POST['senha'])? $_POST['senha']:null;


//$email = 'roger@gmail.com';
//$senha = 'ola mundo';
$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
$result = mysql_query($query);
$hashsBanco = mysql_fetch_assoc($result);
$senhahash = $hashsBanco['SENHA_USUARIO'];
// Encriptando a senha
//$hash = Bcrypt::hash($senha);
// $hash = $2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm
// Salve $hash no banco de dados
// Verificando a senha
//$senha = 'ola mundo';
//$hash = '$2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm'; //Valor retirado do banco
if (!Bcrypt::check($senha, $senhahash)) {
echo 'Senha incorreta!<br/> <a href="frmLogin.php">Voltar</a>';
} else {
  echo '<a href=indexrestrito.php>Senha OK!<a/>';

}
//echo Bcrypt::hash($senha);



?>
