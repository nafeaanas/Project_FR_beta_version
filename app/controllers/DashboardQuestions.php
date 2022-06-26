<?php

class DashboardQuestions extends Controller {

    public function __construct() {
        $this->questionModel = $this->model('question');
    }

    public function index(){
        if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 'admin')){
            $questions = $this->questionModel->getQuestions();
            $data = [
                'questions' => $questions
            ];
            $this->view('dashboardQuestions/index' , $data);
        }else{
            redirect('');
        }
    }
}