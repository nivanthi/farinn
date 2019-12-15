<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// To load pages of the web site

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('Backend/login_view');
    }

    public function login_athentication() {

        if (isset($_SESSION['user_id']) and $_SESSION['is_logged_in'] == TRUE) {
            redirect('backend_controller');
        }


        $this->form_validation->set_rules('username', 'Email', 'required|trim|max_length[30]|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[15]|xss_clean');


        if ($this->form_validation->run() !== FALSE) { //if the form validation passed successfully
            extract($_POST);
            $res = $this->user_model->check_login($username, $password);


            if ($res !== FALSE) {

                $profile_name = $res->firstname . ' ' . $res->lastname;

                $_SESSION['user_id'] = $res->admin_id;
                $_SESSION['picture'] = $res->photo;
                $_SESSION['profile_name'] = $profile_name;
                $_SESSION['is_logged_in'] = TRUE;

                $level = $res->admin_level;

                if ($level == 1)
                    $_SESSION['level'] = "Administrator";
                else
                    $_SESSION['level'] = "Front Officer";


                $this->session->set_userdata(array(
                    'logged_in' => TRUE,
                    'user_det' => $res
                ));


                //var_dump($_SESSION['level']);

                redirect('backend_controller');
            } else
                redirect('/login/?error=1', 'refresh');
        } else
            redirect('/login/?error=2', 'refresh');
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        redirect('login');
    }

    public function idle() {

        $this->load->view('Backend/lock_screen_view');
    }

    public function idle_login_athentication() {
        /* if (isset($_SESSION['user_id']) and $_SESSION['is_logged_in'] == TRUE)
          {
          redirect('login/idle');
          } */


        $this->form_validation->set_rules('username', 'Email', 'required|trim|max_length[30]|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[15]|xss_clean');


        if ($this->form_validation->run() !== FALSE) { //if the form validation passed successfully
            extract($_POST);
            $res = $this->user_model->check_login($username, $password);

            var_dump($res);

            if ($res !== FALSE) {

                $profile_name = $res->firstname . ' ' . $res->lastname;

                $_SESSION['user_id'] = $res->admin_id;
                $_SESSION['picture'] = $res->photo;
                $_SESSION['email'] = $res->email;
                $_SESSION['profile_name'] = $profile_name;
                $_SESSION['is_logged_in'] = TRUE;

                $level = $res->admin_level;

                if ($level == 1)
                    $_SESSION['level'] = "Administrator";
                else
                    $_SESSION['level'] = "Front Officer";


                $this->session->set_userdata(array(
                    'logged_in' => TRUE,
                    'user_det' => $res
                ));


                //var_dump($_SESSION['level']);

                redirect('backend_controller');
            } else
                redirect('/login/idle', 'refresh');
        } else
            redirect('/login/idle', 'refresh');
    }

}
