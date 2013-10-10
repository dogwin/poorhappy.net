<?php
/**
 * @author dogwin
 * @date 2013-10-10
 */
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('file','url','cookie'));
		$this->load->library(array('session','parser','email','image_lib','phpmail','user_agent','pagination','calendar'));
	}
	function index(){
		echo "Admin pannel";
	}
}
/*End the file admin.php*/
/*Location ./application/controllers/manage/admin.php*/