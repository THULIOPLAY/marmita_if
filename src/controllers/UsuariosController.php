<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;
use \src\handlers\LoginHandler;

class UsuariosController extends Controller {

    private $loggedUser;

    public function index() {
        $this->render('add');
    }

    public function add() {
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('/add', [
            'flash' => $flash,
        ]);
    }

    public function addAction(){
        $name = filter_input(INPUT_POST, 'nome');
        $matricula = filter_input(INPUT_POST, 'matricula');
        $horario = filter_input(INPUT_POST, 'horario');
        $data = filter_input(INPUT_POST, 'data');

        
        if ($name && $matricula){
            // $data = Usuario::select()->where('matricula', $matricula)->execute();
            
            // if(count($data) === 0 ){
            //     Usuario::insert([
            //         'nome' => $name,
            //         'matricula' => $matricula,
            //     ])->execute();
                
            //     $this->redirect('/');
            // }

            Usuario::insert([
                'nome' => $name,
                'matricula' => $matricula,
                'horario' => $horario,
                'data' => $data,
            ])->execute();

            $_SESSION['flash'] = 'SUA MARMITA JÁ ESTÁ GARANTIDA';

            $this->loggedUser = LoginHandler::checkLogin();
            if ($this->loggedUser === false) {
                $this->redirect('/novo');
            }

            $this->redirect('/');
    
        }

        $this->redirect('/');

    }

    public function edit($args){
        $usuario = Usuario::select()->where('id', $args['id'])->one();
        
        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }

    public function editAction($args){
        $name = filter_input(INPUT_POST, 'nome');
        $matricula = filter_input(INPUT_POST, 'matricula');
        $horario = filter_input(INPUT_POST, 'horario');
        $data = filter_input(INPUT_POST, 'data');

        if ($name && $matricula){
            if ( $horario && $data){

                Usuario::update()
                    ->set('nome', $name)
                    ->set('matricula', $matricula)
                    ->set('horario', $horario)
                    ->set('data', $data)
                    ->where('id', $args['id'])
                ->execute();
                
                $this->redirect('/');
            } 
        }
        $this->redirect('/usuario/'.$args['id'].'/editar');

    }

    public function del($args){

        Usuario::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
}