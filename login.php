<?php
echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';
include_once 'classes/Bcrypt.class.php';

$email =  isset($_POST['email'])? $_POST['email']:null;
$senha = isset($_POST['senha'])? $_POST['senha']:null;

$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
$usuarios = mysql_fetch_assoc($result);
$senhahash = $usuarios['SENHA_USUARIO'];

if($totalUsuario == 0){
          echo '<script>alert("Usuário inexistente !")</script>';
          echo '<a href=frmLogin.php>Voltar</a>';
}else{

/*Não mexer*/
if (!Bcrypt::check($senha, $senhahash)) {
echo 'Senha incorreta!<br/> <a href="frmLogin.php">Voltar</a>';
} else {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['codigo'] = $usuarios['COD_USUARIO'];
    $_SESSION['nome'] = $usuarios['NOME_USUARIO'];
    
    if($usuarios['TIPO_USUARIO'] == '2'){
         //echo '<a href=indexrestrito.php>Senha OK!<a/>'; 
         echo '<script>alert("Bem - Vindo!"); location.href="RES/indexrestrito.php";</script>';
    }elseif($usuarios['TIPO_USUARIO'] == '1')
    {
           echo '<script>alert("Bem - Vindo!"); location.href="ADM/indexadmin.php";</script>';  
    }else{
        echo '<script>alert("Tipo de Usuário Inválido"); location.href="logout.php";</script>';
    }
    


}
/*Fim, não mexer*/

}

?>
