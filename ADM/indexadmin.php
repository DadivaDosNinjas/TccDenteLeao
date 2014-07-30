<?php

echo '<meta charset=UTF-8>';
include_once '../includes/funcoesUteis.inc';
validaAutenticacao('../frmLogin.php','ADM');
echo'<h2>Página inicial - Ambiente Administrativo</h2>';
echo '<a href=../frmLogin.php>Voltar</a>';

?>