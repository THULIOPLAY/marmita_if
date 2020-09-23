<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

    
    private $loggedUser;


    public function __construct(){
        $this->loggedUser = LoginHandler::checkLogin();
        if ($this->loggedUser === false) {
            $this->redirect('/login');
        } 

    }


    public function home() {
        $hoje = date('Y-m-d');
        $usuarios =  Usuario::select()->where('data', $hoje)->execute();

        $this->render('home', [
            'usuarios' => $usuarios
        ]);

    }

    public function date(){
        $data = filter_input(INPUT_POST, 'listDate');
        $usuarios =  Usuario::select()->where('data', $data)->execute();

        $resposta = $_SESSION['flash'] = 'Agendamento do dia:'.$data;

        $this->render('home', [
            'data' => $data,
            'resposta' => $resposta,
            'usuarios' => $usuarios,
        ]); 
    }

    
    public function pdf() {
        $hoje = date('Y-m-d');
        $usuarios =  Usuario::select()->where('data', $hoje)->execute();

        $this->render('pdf', [
            'usuarios' => $usuarios
        ]);
    }
    
    public function pdfDate() {
        $data = filter_input(INPUT_POST, 'data_imp');
        $usuarios =  Usuario::select()->where('data', $data)->execute();

        $this->render('pdf', [
            'usuarios' => $usuarios
        ]);
    }

    public function sobre() {
        $this->render('sobre');
    }


}