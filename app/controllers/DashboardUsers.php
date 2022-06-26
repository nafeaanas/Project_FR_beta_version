<?php

class DashboardUsers extends Controller {

    public function __construct() {
        $this->userModel = $this->model('user');
    }

    public function index(){
        if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 'admin')){
            $users = $this->userModel->getUsers();
            $data = [
                'users' => $users
            ];
            $this->view('dashboardUsers/index' , $data);
        }else{
            redirect('');
        }
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'conf_password' => trim($_POST['conf_password'])
            ];
            if((!empty($data['first_name'])) && (!empty($data['last_name'])) && (!empty($data['email'])) && (!empty($data['password'])) && (!empty($data['conf_password']))){
                if($data['password'] == $data['conf_password']){
                    if(!($this->userModel->userExists($data))){
                        $login = $this->userModel->signup($data);
                        if($login){
                            redirect('dashboardUsers');
                        }else if($login == false){
                            redirect('dashboardUsers');
                        }
                    }else{
                        redirect('dashboardUsers');
                    }
                }else{
                    redirect('dashboardUsers');
                }
            }
            else{
                redirect('dashboardUsers');
            }
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => trim($_POST['id']),
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email'])
            ];
            if((!empty($data['id'])) && (!empty($data['first_name'])) && (!empty($data['last_name'])) && (!empty($data['email']))){
                $login = $this->userModel->edit($data);
                if($login){
                    redirect('dashboardUsers');
                }else if($login == false){
                    redirect('dashboardUsers');
                }
            }
            else{
                redirect('dashboardUsers');
            }
        }
    }


    public function delet() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING); 
            $data = [
                'id' => $_GET['id']
            ];
            if($this->userModel->delet($data)){
                redirect('dashboardUsers/index');
            }else if($user == false){
                redirect('dashboardUsers/index');
            }
        }
        else{
            redirect('dashboardUsers/index');
        }
    }

    
}