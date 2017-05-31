<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/estilo.css');?>">
    </head>
    <body>
        <nav id="menuHeader" class="menuFixo">
            <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url('/ControllerCliente/formCadastroCliente');?>">Cadastro de Clientes</a></li>
                <li><a href="<?php echo base_url('/Controller/formCadastro');?>">Cadastro de produtos</a></li>
                <li><a href="<?php echo base_url('/Controller/listarCameras');?>">Estoque</a></li>
                <li><a href="<?php echo base_url('/ControllerCliente/listarClientes');?>">Clientes</a></li>
                <li><a href="<?php echo base_url('/ControllerPedido/listarPedidos');?>">Vendas</a></li>
                <li><a href="<?php echo base_url('/ControllerPedido/cadastroPedido');?>">Pedidos</a></li>
            </ul>
        </nav>
    </body>
</html>
