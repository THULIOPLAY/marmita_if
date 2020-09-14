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

    public function index() {
        $hoje = date('Y-m-d');
        $usuarios =  Usuario::select()->where('data', $hoje)->execute();

        $this->render('home', [
            'usuarios' => $usuarios
        ]);
    }

    public function pdf() {
        $hoje = date('Y-m-d');
        $usuarios =  Usuario::select()->where('data', $hoje)->execute();

        $this->render('pdf', [
            'usuarios' => $usuarios
        ]);
    }

    public function sobre() {
        $this->render('sobre');
    }


}