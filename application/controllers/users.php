<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
* User class
*
* @author Ronald dela Cruz
*
*/

class Users extends CI_Controller {

    //--------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        if (!class_exists('CI_Session'))
        {
            $this->load->library('session');
        }

        $this->load->model('Users_model', 'user_model');

    }


    /*
     *  This will be called via AJAX
     *
     *  Validates mobile number, if true will redirect to "enter code" page
     *
     */
    public function validate($mobtel)
    {
        if($this->auth->is_valid($this->input->post('mobtel'))
        {
            //redirect to "enter code" page
            redirect("/");
        }
        else
        {
            $this->template->set('error', $this->config_item('invalid_mobtel'));
            $this->template->render();

        }


    }

    public function login()
    {
        // if the user is not logged in continue to show the login page
        if ($this->auth->is_logged_in() === false)
        {
            if ($this->input->post('submit'))
            {
                // Try to login
                if ($this->auth->login($this->session->userdata('mobile_number'), $this->input->post('code')))
                {
                    //get balance from Profile Service

                    //redirect to content page
                }

            }

            $this->template->render();
        }
        else
        {
            //redirect to content page

        }
    }


}
