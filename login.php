<?php
echo'<meta charset=UTF-8>';
session_start();
$email = isset($_POST['email'])?$_POST['email']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;
 
//echo $email . '        '. $senha;
include_once 'conexao/conecta.inc';
$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
if($totalUsuario === 0){
    echo 'Usuário não encontrado !';
    echo '<a href=frmLogin.php>Voltar</a>';
}
 else {
      //Agora preciso testar a senha do usuário
     $usuario = mysql_fetch_array($result);
     $senhaUsuario = $usuario['SENHA_USUARIO'];
     $tipoUsuario = $usuario['TIPO_USUARIO_ID_TIPO'];       
     $emailUsuario = $usuario['EMAIL_USUARIO'];
     if($senha !== $senhaUsuario){
         echo 'Senha não confere !';
         echo '<a href=frmLogin.php>Voltar</a>';
         }
    else {
          //Agora o email e senha estão corretos !
          //podemos criar as sessões e direcionar os usuarios
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        if($tipoUsuario === '1'){
            echo '<script language="JavaScript"> location.href="RES/indexrestrito.php"
            </script>';
     }
     elseif ($tipoUsuario === '2'){
         echo '<script language= "JavaScript"> location.href="ADM/indexadmin.php"</script>';
     }
     else{
                  echo 'Tipo de usuário inválido !';}
 }
  
}


