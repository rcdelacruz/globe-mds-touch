<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Login Class
 *
 *
 */
class Test extends CI_Controller
{

    function login()
    {
        echo $this->login->user('09179229535');
    }

    function get_bal($mobtel) {

        $hessian = new Hessian();
        var_dump("<pre>", $hessian->get_balance('09179229535'));
    }

}
