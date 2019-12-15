
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
Auther : Gayani Silva
Description : check wether the user is logged in every controller
 */

class Auth_Controller extends CI_Controller {

    function __construct()
    {
    	session_start();

        parent::__construct();
        
        if ( !isset($_SESSION['is_logged_in']) or $_SESSION['is_logged_in'] !== TRUE)
        { 
            redirect('login');
        }

    }
}

?>