<?php

class Cours extends Controller {

    public function index(){
        if(isset($_SESSION['user_id'])){
            $this->view('cours/index');
        }else{
            redirect('');
        }
    }
}