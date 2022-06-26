<?php

class Cour extends Controller {

    public function index(){
        if(isset($_SESSION['user_id'])){
            $this->view('cour/index');
        }else{
            redirect('');
        }
    }
}