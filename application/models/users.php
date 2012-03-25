<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Model {

	function __construct()
	{
		parent::__construct();
		$this->table = 'users';
	}
	

}

/* End of file book.php */
/* Location: ./application/models/users.php */
