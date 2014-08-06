<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8>
        <title>Formulário de Login</title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
    </head>
    <body>
        <h3>Formulário de Login</h3>
        <form method="post" action="inserirUsuario.php">
            <label>Nome:</label><input type="text" name="nomeUsuario"><br/>
        <label>E-mail:</label><input type="email" name="emailUsuario"><br/>
        <label>Nova Senha:</label><input type="password" name="senhaUsuario"><br/>
        <label>Confirmar Nova Senha:</label><input type="password" name="senhaUsuarioConfirma"> <br/>
        <br/>
       <a href="frmLogin.php">Voltar</a> <input type="submit" value="Cadastrar"/>
        </form>
    </body>
</html>

