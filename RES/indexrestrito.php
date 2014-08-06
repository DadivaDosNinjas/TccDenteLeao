<?php
echo'<meta charset=UTF-8>';
include_once '../includes/funcoesUteis.inc';
validaAutenticacao('frmLogin.php','2');
echo '<h3>Sistema de login - Home Page (Restrito) </h3>';

echo '<a href=../perfil.php?codigo=$cod_usuario>Alterar Dados</a> <br/> <br/> <br/>';



echo '<a href=../logout.php?p=frmlogin.php>Logout</a>';
?>