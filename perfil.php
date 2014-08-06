<!DOCTYPE html>
<html>
    <head>
        <title>Perfil</title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
    </head>
    <body>
        <h3>Perfil</h3> 
     
         
        <?php
        
              include 'conexao/conecta.inc';
            
              //-> sessao do usuario
              session_start();

echo "Perfil";
$_SESSION["NOME_USUARIO"] = "";
$_SESSION["EMAIL_USUARIO"] = "";
$_SESSION["data"] = date('d/m/y', time());

//echo '<br><a href="pagina2.php"></a>';

             $sql = "SELECT * FROM usuario WHERE COD_USUARIO ='$codigo_usuario'";
              $result = mysql_query($sql);
              $usuario = mysql_fetch_array($result);
        ?>
        
        <form action="atualizarUsuario.php" method="post">
           Nome:  <input type="text"        name="nome"   value="<?php echo $usuario  ['NOME_USUARIO'] ?>"> <br/>
           Senha: <input type="password"    name="senha"  value="<?php echo $usuario  ['SENHA_USUARIO']?>"> <br/>
           Email: <input type="email"       name="email"  value="<?php echo $usuario  ['EMAIL_USUARIO']?>"> <br/>
           Tipo de usuário:
              <select name="tipo">  
                  <option>RES</option>
                   <option>ADM</option>
              </select>
           <br/><br/><br/>
         
        
            
        
       <a href="../loginOficial/RES/indexrestrito.php">Voltar</a> <input type="submit" value="Atualizar"/>
        </form>
    </body>
</html>
