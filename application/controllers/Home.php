<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_product');
		$this->load->model('m_tulisan');
	}

	public function index()
	{
		$data['product']    = $this->m_product->tampil_data();
		$data['news'] 	    = $this->m_tulisan->tampil_data();
        $this->load->view('v_home', $data);
    }
		
}