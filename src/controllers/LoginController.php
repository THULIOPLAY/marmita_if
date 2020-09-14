<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;
use \src\models\Admin;

use \src\handlers\LoginHandler;

class LoginController extends Controller {


    public function signin(){
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('/login', [
            'flash' => $flash,
        ]);
    }

    public function signinAction(){

        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');

        if($email && $senha){

            $token = LoginHandler::verifyLogin($email, $senha);

            var_dump($token);

            if($token){
                $_SESSION['token'] = $token;
                $this->redirect('/home');

            }else {
                
                $_SESSION['flash'] = 'E-mail e/ou Senha não conferem';
                $this->redirect('/login');

            }

        }else {
            $this->redirect('/login');
        }
    }


    public function signup(){

        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('/cadastrar', [
            'flash' => $flash,
        ]);
    }

    public function signupAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');

        if($nome && $email && $senha){

            if (LoginHandler::emailExists($email) === false) {
                $token = LoginHandler::addAdmin($nome, $email, $senha);
                $_SESSION['token'] = $token;

                $this->redirect('/home');
  

            }else{
                $_SESSION['token'] = 'E-Mail Já Cadastrado';
                $this->redirect('/cadastrar');
            }

        }else{
            $this->redirect('/cadastrar');
        }

    }


}