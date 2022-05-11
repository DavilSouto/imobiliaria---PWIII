<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imóvel</title>
</head>
<body>
    <form name="cadImovel" id="cadImovel" action="" method="post">
        <table style="position: relative; top: 40px">
            <tr>
                <td><h4>Cadastrar Imóvel</h4></td>
            </tr>   
            <tr>
                <td>Descricao:</td> 
                <td><input type="text" name="descricao" id="descricao" value="<?php echo isset($imovel)?$imovel->getDescricao():''; ?>" /></td>
            </tr>
            <tr>
                <td>Foto:</td> 
                <td><input type="text" name="foto" id="foto"  value="<?php echo isset($imovel)?$imovel->getFoto():''; ?>" /><br/></td>
            </tr>
            <tr>
                <td>Valor</td>
                <td><input type="number" name="valor" id="valor" value="<?php echo isset($imovel)?$imovel->getValor():''; ?>" /><br/></td>
            </tr>
        <tr>
            <td>Tipo:</td>
            <td><select name="tipo" id="tipo">
                <option value="0">**Selecione**</option>
                <option value="A" <?php echo isset($imovel) && $imovel->getTipo()=="A"?"selected":""; ?>>Apartamento</option>
                <option value="C" <?php echo isset($imovel) && $imovel->getTipo()=="C"?"selected":""; ?>>Casa</option>
                <option value="T" <?php echo isset($imovel) && $imovel->getTipo()=="T"?"selected":""; ?>>Terreno</option>
            </td>
        </select>
        </tr>
        <tr>
            <td><input type="hidden" name="id" id="id" value="<?php echo isset($imovel)?$imovel->getId():''; ?>" /></td>
        </tr>
        <tr>
            <td><input type="submit" name="btnSalvar1" id="btnSalvar1"></td>
        </tr>
        </table>
    </form>

    <?php
        if(isset($_POST["btnSalvar1"])){

            require_once "./controller/ImovelController.php";

            call_user_func(array("ImovelController","salvar"));
            header("Location: index.php?page=imovel&action=listar");
        }
    ?>
</body>
</html>


