<?php
function validaAutenticacao($tipoUser,$link)
{
    echo '<meta charset=UTF-8>';
session_start();
if(!isset($_SESSION['email']) or !isset($_SESSION['senha']))
{
    session_destroy();
            echo '<script>
                     alert("Você não efetuou login!")
                     location.href="'.$link.'"
                </script>';
    }  else {
    // Obs:  fazer a validação para que o usuário x não entre no ambiente do usuário y
    if($tipoUser == 'RES'){
    include_once 'conexao/conecta.inc';
    
    } else {
      include_once '../conexao/conecta.inc';  
    }
    $email = isset($_SESSION['email'])?$_SESSION['email']:null;
    $senha =isset($_SESSION['senha'])?$_SESSION['senha']:null;
    $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
    $acao = mysql_query($query);
    $usuarios = mysql_fetch_array($acao);
    $emailUsuario = $usuarios['EMAIL_USUARIO'];
    $tipoUsuario  = $usuarios['TIPO_USUARIO'];
    $senhaUsuario = $usuarios['SENHA_USUARIO'];
    if($tipoUsuario !== $tipoUser)
    {
        session_destroy();
        echo '<script>
                     alert("Acesso negado para o seu tipo de Usuário")
                     location.href="'.$link.'"
                </script>';
        
   }elseif($email !== $emailUsuario)
   {
       session_destroy();
         echo '<script>
                     alert("Acesso negado \n email de usuário inválido !")
                     location.href="'.$link.'"
                </script>';
         
   }elseif ($senha !== $senhaUsuario) 
          {
              session_destroy();
               echo '<script>
                     alert("Acesso negado \n senha não confere !")
                     location.href="'.$link.'"
                </script>';
         }
   }
}