<?php

class Dashboard extends Controller {

    public function __construct() {
        $this->userModel = $this->model('user');
        $this->questionModel = $this->model('Question');
        $this->courModel = $this->model('Cour');
    }

    public function index(){
        if((isset($_SESSION['user_id'])) && ($_SESSION['role'] == 'admin')){
            $numberuser = $this->userModel->getNumberUser();
            $numberquestion = $this->questionModel->getNumberQuestion();
            $numbercour = $this->courModel->getNumberCour();
            $data = [
                'numberuser' => $numberuser,
                'numberquestion' => $numberquestion,
                'numbercour' => $numbercour,
            ];
            $this->view('Dashboard/index' , $data);
        }else{
            redirect('');
        }
    }
}