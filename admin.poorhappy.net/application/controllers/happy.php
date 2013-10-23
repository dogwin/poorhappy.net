<?php
/**
 * @author dogwin
 * @date 2013-10-07
 */
class Happy extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('file','url','cookie'));
		$this->load->library(array('session','parser','email','image_lib','phpmail','user_agent','pagination','calendar'));
	}
	function index(){
		echo "admin.php";
	}
}