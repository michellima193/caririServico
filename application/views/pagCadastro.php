<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Trabalhador</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap-theme.min'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/estilo2.css'); ?>">

        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"); ?>"></script>
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/bootstrap.min.js"); ?>"></script>
    </head>
    <body>
        <?php echo form_open('ControllerCadastro/cadastro'); ?>
        <div class="container" style="padding-top: 130px">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="form-group">
                        <label for="Nome_Usuario">Nome:</label>
                        <input type="text" class="form-control" name="Nome_Usuario" id="Nome_Usuario" placeholder="nome usuario" required=""/>
                    </div>
                    <div class="form-group">
                        <label for="CPF">CPF:</label>
                        <input type="text" class="form-control" name="CPF" id="CPF" placeholder="CPF" required/>
                    </div>
                    <div class="form-group">
                        <label for="Detalhe">Detalhe:</label>
                        <input type="text" class="form-control" name="Detalhe"  id="Detalhe" placeholder="detalhe"/>
                    </div>
                    <div class="form-group">
                        <label for="User_Login">Nome Login</label>
                            <input type="text" class="form-control" name="User_Login"  id="User_Login" placeholder="usuario"/>
                    </div>
                    <div class="form-group">
                        <label for="Senha_Usuario">Senha:</label>
                        <input type="password" class="form-control" name="Senha_Usuario" id="Senha_Usuario" placeholder="senha"/>
                    </div>
                    <div class="form-group">
                        <label for="CEP">CEP:</label>
                        <input type="text" class="form-control" name="CEP" id="CEP" placeholder="CEP"/>
                    </div>
                    <div class="form-group">
                        <label for="Numero">Número:</label>
                        <input type="number" class="form-control" name="Numero" id="Numero" placeholder="Nº"/>
                    </div>
                    <div class="form-group">
                        <label for="Complemento">Complemento:</label>
                        <input type="text" class="form-control" name="Complemento"  id="Complemento" placeholder="Complemento"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="email" class="form-control" name="Email" id="Email" placeholder="e-mail"/>
                    </div>
                    <div class="form-group">
                        <label for="Telefone1">Telefone 1 :</label>
                        <input type="text" class="form-control" name="Telefone1" id="Telefone1" placeholder="t1"/>
                    </div>
                    <div class="form-group">
                        <label for="Telefone2">Telefone 2 :</label>
                        <input type="text" class="form-control" name="Telefone2" id="Telefone2" placeholder="t2"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary" value="Enviar">
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </body>
</html>
