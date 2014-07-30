<?php
 //Configuração


$server = 'localhost';
$user = 'root';
$password = '12345678';
$database = 'tccdb';



 
/*$server    = 'mysql2';
$user      = 'a3051993_gist';
$password  = 'Gist12358';
$database  = 'a3051993_gist';
*/
$connection = mysql_connect($server,$user,$password);
    if($connection === FALSE)
    {
        echo 'Não foi possivel estabelecer uma conexão com o MYSQL !<br/>';
        echo mysql_error();
        
    }
    else{
        if(!mysql_select_db($database,$connection))
        {
            echo'Nâo foi possivel selecionar o banco de dados  '. $database . '<br/>';
            echo mysql_error();
        }
    
     }   
    
?>