<?php

class SignUp extends Controller {

    public function __construct() {
        $this->userModel = $this->model('user');
    }

    public function index(){
        if(!isset($_SESSION['user_id'])){
            $this->view('sign_up/index');
        }else{
            redirect('');
        }
    }

    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'conf_password' => trim($_POST['conf_password']),
                'error' => ''
            ];
            if((!empty($data['first_name'])) && (!empty($data['last_name'])) && (!empty($data['email'])) && (!empty($data['password'])) && (!empty($data['conf_password']))){
                if($data['password'] == $data['conf_password']){
                    if(!($this->userModel->userExists($data))){
                        $login = $this->userModel->signup($data);
                        if($login){
                            $data['error'] = 'Successful';
                            $this->view('sign_in/index' , $data);
                        }else if($login == false){
                            $data['error'] = 'You cant creat acount';
                            $this->view('sign_up/index' , $data);
                        }
                    }else{
                        $data['error'] = 'You Cant To Creat Acount For This Email';
                        $this->view('sign_up/index' , $data);
                    }
                }else{
                    $data['error'] = 'Confirme Your Password';
                    $this->view('sign_up/index' , $data);
                }
            }
            else{
                $data['error'] = 'Please, File All The File';
                $this->view('sign_up/index' , $data);
            }
        }
        else{
            redirect('');
        }
    }
}