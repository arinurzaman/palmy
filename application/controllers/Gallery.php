<?php
class Gallery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_galeri');
	}

	public function index()
	{
		$data['image'] 	    = $this->m_galeri->tampil_data();
        $this->load->view('v_gallery', $data);
    }
		
}