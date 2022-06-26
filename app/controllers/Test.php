<?php

class Test extends Controller {

    public function __construct() {
        $this->questionModel = $this->model('user');
    }

    public function index(){
        if(isset($_SESSION['user_id'])){
            $this->view('test/index');
        }else{
            redirect('');
        }
    }

    public function getQuestion(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'id' => trim($_POST['id'])
            ];
            $quastion = $this->questionModel->getQuestion($data);
            if($quastion){
                var_dump($quastion);
                exit();
            }
        }
        else{
            redirect('');      
        }
    }
}