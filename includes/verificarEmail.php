<?php
//recebendo o e-mail do usuario
$email = $_GET['login_'];
$server = 'localhost';
$user = 'root';
$password='12345678';
$database= 'loginoficial3cdb';

$connection = mysql_connect($server, $user, $password);
mysql_select_db($database,$connection);
 
$query="SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);

$emailCadastrados = array();

while ($usuarios = mysql_fetch_assoc($result)){
    $emailCadastrados[]= $usuarios['EMAIL_USUARIO'];
    
}

if(in_array($email, $emailCadastrados) )
{
    echo false;
    
}
else{
    echo true;
}
exit();





 

