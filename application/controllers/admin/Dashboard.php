<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE)
		{
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengunjung');
	}

	public function index()
	{
		if($this->session->userdata('akses') == '1')
		{
			$x['visitor'] = $this->M_pengunjung->statistik_pengujung();
			$this->load->view('admin/v_dashboard',$x);
		}else{
			redirect('administrator');
		}
	}
}