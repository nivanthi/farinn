<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class My404 extends CI_Controller 
{
 


    public function __construct() {
            parent::__construct();              
    }

    //
    // @ start 404 page code
    //
    public function index() {

        $this->load->view("error404.php");

    }
} 
