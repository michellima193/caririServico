<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap-theme.min'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap.css'); ?>">
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"); ?>"></script>
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/bootstrap.min.js"); ?>"></script>

    </head>
    <body class="menu">  
        <!--Começo menu -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:" >

                        <!--CABEÇALHO DO MENU-->
                        <div class="navbar-header">
                            <!-- CRIANDO O BOTAO ,AONDE VAO FICAR O MENU QUANDO A TELA FOR PEQUENA
                            COLAPSON É O EFEITO QUE FAZ APARECER O BOTAO-->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                                <span class="sr-only">Logo do Cariri Serviços</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--NOME QUE FICA NO MENU,PODE COLOCAR UM LOGO AQUUI-->
                            <a class="navbar-brand" href="<?php echo base_url(''); ?>">Cariri Serviços</a>
                        </div>
                        <!-- FIM CABEÇALHO DO MENU-->
                        <!--essa DIV faz com que aO diminuir a pagina todos os campos do menu desapareça e vá parar no icone
                       button tem data-target="#bs-example-navbar-collapse-1" esse nome tem que ser igual ao id abaixo
                       e ele que faz a comunicação-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <!--Começo dos links-->
                            <!--   <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6" style="padding:0px;" >
                                   <ul class="nav navbar-nav" >
                                       <li><a href="#">Serviços</a></li>
                                       <li><a href="#">Trabalhador</a></li>
                                       <li><a href="#">Quem Somos</a></li>
   
                                   </ul>
                               </div> -->
                            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Serviços</a></li>
                                    <li><a href="#">Trabalhador</a></li>
                                    <li><a href="#">Quem Somos</a></li>
                                    <li><a href="<?php echo base_url("/ControllerCadastro/trabalhador"); ?>"><span class="glyphicon glyphicon-user"style="font-size: 15px; "></span>  Cadastre-se</a></li>
                                    <li><a href="<?php echo base_url('/Controller/index'); ?>"> &brvbar; Login</a></li>
                                </ul>
                            </div>
                            <!--Fim dos links-->
                        </div>
                    </div><!--Fim Collapse-->
                </div>
            </div>
        </nav>
        <!--Fim do menu -->

    </body>
</html>
