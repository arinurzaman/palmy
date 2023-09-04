<?php
class About extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('');
	}

	public function index()
	{
        $this->load->view('v_about');
    }
		
}