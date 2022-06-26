<?php

class DashboardCours extends Controller {

    public function __construct() {
        $this->courModel = $this->model('cour');
    }

    public function index(){
        if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 'admin')){
            $cours = $this->courModel->getCours();
            $data = [
                'cours' => $cours
            ];
            $this->view('dashboardCours/index' , $data);
        }else{
            redirect('');
        }
    }
}