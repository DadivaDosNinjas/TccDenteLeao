<!DOCTYPE html>
<html>
    <head>
        <title>Formulário de login</title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
    </head>
    <body>
        <h3>Formulário de Login</h3>
        <form method="post" action="login.php">
        <label>E-mail:</label><input type="email" name="email" required><br/>
        <label>Senha:</label><input type="password" name="senha"  required><br/>
        <input type="submit" value="Logar"><br/>
        </form>
        <a href="frmInserir.php">Cadastre-se</a> &nbsp; <a href="recuperarSenha.php">Esqueceu sua senha?</a>
        
    </body>    
   </html>