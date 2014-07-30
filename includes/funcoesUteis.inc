<?php

function validaAutenticacao($link,$tipo)
{
    session_start();
echo'<meta charset="UTF_8">';
if($tipo === '1')include_once '../conexao/conecta.inc';
if($tipo === '2')include_once '../conexao/conecta.inc';
$email =  $_SESSION['email'];
$senha = $_SESSION['senha'];
$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
if($totalUsuario !== 0){
    //Agora preciso testar a senha 
    $usuarios = mysql_fetch_assoc($result);
    $senhaBanco = $usuarios['SENHA_USUARIO'];
    $tipoBanco = $usuarios['TIPO_USUARIO_ID_TIPO'];
    if($senha !== $senhaBanco){
        session_destroy();
        echo'<script>
           alert ("Acesso negado !\n Sua senha não confere.");
           location.href="'.$link.'"
         </script>';}
}


else{
    session_destroy();
    echo '<script>
        alert("Acesso negado !\n Email não confere.")
        location.href="'.$link.'"
            </script>';
}
if($tipo !== $tipoBanco){
    session_destroy();
      echo '<script>
        alert("Acesso negado !\n Você não tem permissão de Acesso.")
        location.href="'.$link.'"
            </script>';
}


}