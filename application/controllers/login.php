<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Login Class
 *
 *
 */
class Login extends CI_Controller
{

    function index()
    {
        echo $this->login->user('09179229535');
    }

}
