<?php
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_product');
	}

	public function index()
	{
		$data['product']    = $this->m_product->tampil_data_product();
        $this->load->view('v_product', $data);
    }

	public function detail_product($id) 
	{
        $this->load->model('m_product'); 
        $data = $this->m_product->get_data($id);
        $this->load->view('v_product_detail', ['data' => $data]);
    }
		
}