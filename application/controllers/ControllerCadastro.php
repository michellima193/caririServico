<?php

class ControllerCadastro extends CI_Controller {

    
     public function trabalhador(){
      //  $this->load->view('index.php');
       
         $this->load->view('pagCadastro');
    }

    public function cadastro() {
        $this->load->Model('modelCadastro', '', TRUE);
        //Organizando o ARRAY($usuario) para preenchimento da tabela USUÁRIO;
        $usuario = array(
            'Nome_Usuario' => $this->input->post('Nome_Usuario'),
            'Sobre' => $this->input->post('Detalhe'),
            'CPF' => $this->input->post('CPF')
        );


        //Organizando o ARRAY($contato) para preenchimento da tabela CONTATOS;
        $contato = array(
            'Email' => $this->input->post('Email'),
            'Telefone1' => $this->input->post('Telefone1'),
            'Telefone2' => $this->input->post('Telefone2')
        );

        //Organizando o ARRAY($localizacao) para preenchimento da tabela LOCALIZACAO;
        $localizacao = array(
            'CEP' => $this->input->post('CEP'),
            'Numero_End' => $this->input->post('Numero'),
            'Complemento' => $this->input->post('Complemento')
        );

        //Organizando o ARRAY($localizacao) para preenchimento da tabela LOCALIZACAO;
        $login = array(
            'Usuario_Login' => $this->input->post('User_Login'),
            'Senha_Login' => md5($this->input->post('Senha_Usuario')) //md5(string) criptografa a senha para md5
        );
        $this->modelCadastro->inserirDados($usuario, $contato, $localizacao, $login); //Passagem de ARRAYS como parâmetros
        $this->modelCadastro->uparDados($this->input->post('CPF')); //Usa o CPF que é UNIQUE para identificar e IGUALAR !

        //Views a serem chamadas
        $this->load->view('index.php');
        $this->load->view('cadastroOk');
    }

}
