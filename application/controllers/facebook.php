<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Facebook OAuth library.
 * Sample controller.
 * Requirements: enabled Session library, enabled URL helper
 */

class Facebook extends CI_Controller
{

    /**
     * Controller constructor
     */
    function __construct()
    {
        parent::__construct();


        $session = $this->facebook->getUser();

        //Check to see if the access_token is present in Facebook session data
        if ($user) {

            $user_profile = $facebook->api('/me');

        } else {

            //Extended Permissions requested from the API at time of login
            $auth_config['req_perms'] = 'publish_stream';

            //Dialog Form Factors used to display login page
            $auth_config['display'] = 'popup';

            //Callback URL once user is authenticated
            $auth_config['next'] = '';

            //Get the login URL using the parameters in $auth_config array
            $login_url = $this->facebook->getLoginUrl($auth_config);
            header('Location: ' . $login_url);
        }
    }

    /**
     * Here comes authentication process begin.
     * @access  public
     * @return  void
     */
    public function auth()
    {
        if($this->session->userdata('access_token') && $this->session->userdata('access_token_secret'))
        {
            // User is already authenticated. Add your user notification code here.
            redirect(base_url('/'));
        }
        else
        {
            // Making a request for request_token
            $request_token = $connection->getRequestToken(base_url('/twitter/callback'));

            $this->session->set_userdata('request_token', $request_token['oauth_token']);
            $this->session->set_userdata('request_token_secret', $request_token['oauth_token_secret']);

            if($connection->http_code == 200)
            {
                $url = $connection->getAuthorizeURL($request_token);
                redirect($url);
            }
            else
            {
                // An error occured. Make sure to put your error notification code here.
                redirect(base_url('/'));
            }
        }
    }


}

/* End of file facebook.php */
/* Location: ./application/controllers/facebook.php */
