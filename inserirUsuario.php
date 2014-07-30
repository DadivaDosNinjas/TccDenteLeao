<?php
include_once 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';
$nomeUsuario    = $_POST['nomeUsuario'];
$emailUsuario   = $_POST['emailUsuario'];
$senhaUsuario   = $_POST['senhaUsuario'];




$query = "INSERT INTO usuario (NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, TIPO_USUARIO_ID_TIPO)
          VALUES('$nomeUsuario', '$emailUsuario', '$senhaUsuario', 2)";

if(mysql_query($query))
{
    echo 'Dados incluídos com sucesso!';
}  else {
         echo mysql_error();    
}

echo '<a href="frmlogin.php">Voltar</a>';

