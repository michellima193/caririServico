<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open('ControllerCadastro/cadastro'); ?>
        <input type="text" name="Nome_Usuario" placeholder="nome usuario" required=""/>
        <input type="text" name="CPF" placeholder="CPF" required/>
        <input type="text" name="Detalhe" placeholder="detalhe"/>
        <input type="text" name="User_Login" placeholder="usuario"/>
        <input type="text" name="Senha_Usuario" placeholder="senha"/>
        <input type="text" name="CEP" placeholder="CEP"/>
        <input type="text" name="Numero" placeholder="Nº"/>
        <input type="text" name="Complemento" placeholder="Complemento"/>
        <input type="text" name="Email" placeholder="e-mail"/>
        <input type="text" name="Telefone1" placeholder="t1"/>
        <input type="text" name="Telefone2" placeholder="t2"/>
        <input type="submit" value="Enviar">
        <?php echo form_close(); ?>
    </body>
</html>
