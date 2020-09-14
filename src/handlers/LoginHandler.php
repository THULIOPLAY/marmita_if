<?php

    namespace src\handlers;

    use \src\models\Admin;

    class LoginHandler{
        
        public static function checkLogin(){

            if (!empty($_SESSION['token'])) {
                $token = $_SESSION['token'];

                $data = Admin::select()->where('token', $token)->one();

                if (count($data) > 0) {
                    $loggedUser = new Admin();
                    $loggedUser->id = $data['id'];
                    $loggedUser->email = $data['email'];
                    $loggedUser->nome = $data['nome'];

                    return $loggedUser;
                }

            }
            return false;
        }

        public static function verifyLogin($email, $senha){
        
            $data = Admin::select()->where('email', $email)->one();
        
            if($data){

                if (password_verify($senha, $data['senha'])) {
                    $token =  md5(time().rand(0,9999912).time());


                    Admin::update()
                        ->set('token', $token)
                        ->where('email', $email) 
                    ->execute(); 


                    return $token;
                }

                return "OK"; 
            }
                return false;
        }


        public static function emailExists( $email){
            $user = Admin::select()->where('email', $email)->one();
            return $user ? true : false;
        }

        public static function addAdmin($nome, $email, $senha){
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $token =  md5(time().rand(0,9999912).time());

            Admin::insert([
                'nome' => $nome,
                'email' => $email,
                'senha' => $hash,
                'token' => $token,
            ])->execute();
            
            return $token;
        }
}

?>