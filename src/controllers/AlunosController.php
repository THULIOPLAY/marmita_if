<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\models\Aluno;

class AlunosController extends Controller {
    private $loggedUser;


    public function __construct(){
        $this->loggedUser = LoginHandler::checkLogin();
        if ($this->loggedUser === false) {
            $this->redirect('/login');
        } 

    }

    public function indexUser() {
        $alunos = Aluno::select()->execute();
        $this->render('usuarios',[ 'usuarios' => $alunos]);
    }


    public function edit($args){
        $aluno = Aluno::select()->where('id', $args['id'])->one();
        
        $this->render('editAluno', [
            'usuario' => $aluno
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
                
                $this->redirect('/home');
            } 
        }
        $this->redirect('/usuario/'.$args['id'].'/editar');

    }

    public function del($args){

        Aluno::delete()->where('id', $args['id'])->execute();
        $this->redirect('/home');
    }

}