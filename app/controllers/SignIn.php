<?php

class SignIn extends Controller {

    public function __construct() {
        $this->userModel = $this->model('user');
    }

    public function index(){
        if(!isset($_SESSION['user_id'])){
            $this->view('sign_in/index');
        }else{
            redirect('');
        }
    }

    public function signin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'error' => ''
            ];

            if((!empty($data['email'])) && (!empty($data['password']))){
                $login = $this->userModel->signin($data);
                if($login){
                    $this->createUserSession($login);
                    if($_SESSION['role'] == 'admin'){
                        redirect('Dashboard');
                    }else{
                        redirect('');
                    }
                }else if($login == false){
                    $data['error'] = 'Password Or Email Is Incorrect';
                    $this->view('sign_in/index' , $data);
                }
            }else{
                $data['error'] = 'Please, File All The File';
                $this->view('sign_in/index' , $data);
            }
        }else{
            redirect('');
        }
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['first_name'] = $user->first_name;
        $_SESSION['last_name'] = $user->last_name;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;
        $_SESSION['time'] = time();
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        unset($_SESSION['email']);
        unset($_SESSION['time']);
        session_destroy();
        redirect('');
    }
}