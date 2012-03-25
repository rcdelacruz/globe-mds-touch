<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            
            if (!class_exists('CI_Session'))
            {
                $this->load->library('session');
            }

            $this->load->model('Users');
            
            $this->load->helper(array('url','file'));
            $this->load->library('user_agent');
        
            $this->rest->initialize(array('server' => 'http://50.18.116.14/services/'));
        }

        public function index()
        {
            $response = $this->rest->get('api/simplepie');
            
            $this->template->set(array("data" => $response));
            $this->template->render();
        }
        
        function login()
        {
            if($_POST) {           
                $response = $this->rest->get('api/login/'.$this->input->post('mobtel'));
                
                if($response->error) {
                    $this->template->set(array('error' => $response->error));
                    $this->template->render();
                }else {
                    //var_dump("<pre>", $response);die;
                    //Destroy old session
                    $this->session->sess_destroy();

                    //Create a fresh, brand new session
                    $this->session->sess_create();

                    $this->session->set_userdata($response);    
                
                    $this->load->view('home/verify');
                    //$this->template->render();
                }
            }else {
                $this->template->render();
            }
			
		}
		
		function verify()
		{
		
		    //var_dump("<pre>", $this->session->userdata('code'));die;
		    if($this->session->userdata('code') == $this->input->post('verification_code')) {
		    
		        //fetch entries
		    }else {
		        $this->template->set(array('error' => 'Not a valid code'));
		    }
		    
			$this->template->render();
		}

        /*
         * Process mobile number, called from AJAX
         *
         * @params
         * @return string
         */
        function process_number()
        {
                $mobtel = $this->input->post('mobtel');

                //check
                $user = new Login();

                $data = array();

                if ($user->is_valid($mobtel))
                {
                     $data = array(
                                "mobtel" => $mobtel,
                                "success" => 1
                       );

                }
                else
                {
                     $data = array(
                                "mobtel" => "",
                                "success" => 0
                       );
                }




                /*if(! empty($mobtel)) {
                        $data = array(
                                "mobtel" => $mobtel,
                                "success" => "yes"
                       );
                }
                else {
                        $data = array(
                                "mobtel" => "",
                                "success" => "no"
                        );
                }*/

                echo json_encode($data);
        }
        /*
         * Process verfication code, called from AJAX
         *
         * @params
         * @return string
         */
        function process_verification()
        {

                $code = $this->input->post('verification_no');

                $mobtel = $this->session->userdata('mobile_number');

                $user = new Login();

                $response = $user->validate_code($mobtel, $code);

                $data = array();

                if(! empty($verification_no)) {
                        $data = array(
                                "verification_no" => $verification_no,
                                "success" => "yes"
                        );
                }
                else {
                        $data = array(
                                "verification_no" => "",
                                "success" => "no"
                        );
                }

                echo json_encode($data);
        }

        function request_verification()
        {
                $data['header'] = "Request";
                $this->template->set($data);
                $this->template->render();
        }
        
        function check_balance()
        {

                $mobtel = $this->session->userdata('mobile_number');

                try
                {
                    Hessian::getAccountTypeAndClassification($mobtel);
                }
                catch(Exception $e)
                {
                    die('here');
                }
                $this->template->render();
                //var_dump($_COOKIE['mob_tel']);
        }
        
        function menu()
        {
			$this->template->render();
		}
		
		function prepaid()
		{
			$this->load->config('products');
			$products = $this->config->item('prepaid');
			echo "<pre>";
			print_r($products);
			echo "</pre>";
		}
		
		function promos_test($type='call')
		{
			$type = $this->uri->segment(3);
			
			$this->load->config('products', true);
            $prepaid = $this->config->item('prepaid','products');
            //$requestResponse['postpaid'] = $this->config->item('postpaid','products');
 
            $data['response'] = $prepaid[$type];
			$this->load->view('home/product_test',$data);
		}
		
		function promos($type=null)
		{
			$type = $this->uri->segment(3);

			$this->load->config('products', true);
            $prepaid = $this->config->item('prepaid','products');
			

			$data['response'] = $prepaid[$type];
			$data['type'] = $type;
			
			$this->template->set($data);
			$this->template->render();
		}
		
		function news()
		{
			$this->template->render();
		}
		
		function sns()
		{
			$this->template->render();
		}
		
		function featured()
		{
			$this->template->render();
		}
		
		function friend_request()
		{
			$this->template->render();
		}
              
        function drop_down()
        {
			$this->template->render();
        }
        /*
         * Test for Javascript Cookie
         */
        function test()
        {
                //echo "test";
                //$this->template->render();
                $this->load->view('home/test');
        }
        
        function test2()
        {
                //echo "test";
                //$this->template->render();
                $this->load->view('home/test2');
        }
        
        function pull_to_refresh()
        {
                $this->load->view('home/pull-to-refresh');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
