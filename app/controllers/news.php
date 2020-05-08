<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends CI_Controller {

	public function __construct(){

			parent::__construct();
			$this->titre='test des controller Code Igniter';
			$this->load->helper('url');
			$this->load->helper('assets');
			//echo "test ... test ... test..";
		}

	public function index()
	{	
		echo "news page call any view from here";

	}
}
