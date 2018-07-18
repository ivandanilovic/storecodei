<?php

require_once 'Controller.php';

class User_controller extends Controller
{

    public function loadSignIn()
    {
        $this->loadView('signin');
    }

    public function validateSignIn() {
      var_dump($_POST);
        if (!isset($_POST['signin'])) header('Location: ' . base_url());
        //if (!$this->form_validation->run()) header('Location: ' . base_url('signin'));
        $this->load->model('user_model');
        $user = $this->user_model->findUser($_POST['credentials'], $_POST['password']);
        if (!$user) header('Location: ' . base_url('signin'));
        $this->session->user = serialize($user); // Moramo ga rasklopiti u string prije smještanja u session.
        header('Location: ' . base_url());
    }

}