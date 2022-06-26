<?php

class Tests extends Controller {

    public function index(){
        if(isset($_SESSION['user_id'])){
            $this->view('tests/index');
        }else{
            redirect('');
        }
    }
}