<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <table>
                <tr>
                    <td><h4>Cadastrar Usuário</h4></td>
                </tr> 
                <tr>
                    <td>Login</td>
                    <td><input type="text" name="login" id="login" value="<?php echo isset($usuario)?$usuario->getLogin():'' ?>" /></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="senha1" id="senha1" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" /></td>
                </tr>
                <tr>
                    <td>Confirmação da Senha</td>
                    <td><input type="password" name="senha2" id="senha2"/></td>
                </tr>
                <tr>
                    <td><select name="permissao" id="permissao">
                        <option value="0">**Selecione**</option>
                        <option value="A" <?php echo isset($usuario) && $usuario->getPermissao()=="A"?"selected":"" ?>>Administrador</option>
                        <option value="C" <?php echo isset($usuario) && $usuario->getPermissao()=="C"?"selected":"" ?>>Comum</option>
                    </select>
                    </td>
                </tr>
                <input type="hidden" name="id" id="id" value="<?php echo isset($usuario)?$usuario->getId():''; ?>" />
                <tr>
                    <td><input type="submit" name="btnSalvar" id="btnSalvar"></td>
                </tr>
            </table>
    </form>

    <?php
        if(isset($_POST["btnSalvar"])){
           
            require_once "controller/UsuarioController.php";

            call_user_func(array("UsuarioController","salvar"));
             header("Location: index.php?page=usuario&action=listar");
        }
    ?>
</body>
</html>