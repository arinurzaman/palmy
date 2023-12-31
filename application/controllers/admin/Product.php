<?php
class Product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE)
		{
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_product');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

	function index()
	{
		$x['data']=$this->m_product->get_all_product();
		$this->load->view('admin/v_product',$x);
	}
	
	function simpan_product()
	{
		$config['upload_path'] = './assets/images/product/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library']	='gd2';
				$config['source_image']		='./assets/images/product/'.$gbr['file_name'];
				$config['create_thumb']		= FALSE;
				$config['maintain_ratio']	= FALSE;
				$config['quality']			= '60%';
				$config['width']			= 300;
				$config['height']			= 300;
				$config['new_image']		= './assets/images/product/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$photo				= $gbr['file_name'];
				$nama				= strip_tags($this->input->post('xnama'));
				$title				= strip_tags($this->input->post('xtitle'));
				$ket				= strip_tags($this->input->post('xket'));
				$spesifikasi		= strip_tags($this->input->post('xspesifikasi'));
				$material			= strip_tags($this->input->post('xmaterial'));
				$spesifikasi_1		= strip_tags($this->input->post('xspesifikasi1'));
				$v_spesifikasi_1	= strip_tags($this->input->post('vxspesifikasi1'));
				$spesifikasi_2		= strip_tags($this->input->post('xspesifikasi2'));
				$v_spesifikasi_2	= strip_tags($this->input->post('vxspesifikasi2'));
				$spesifikasi_3		= strip_tags($this->input->post('xspesifikasi3'));
				$v_spesifikasi_3	= strip_tags($this->input->post('vxspesifikasi3'));
				$spesifikasi_4		= strip_tags($this->input->post('xspesifikasi4'));
				$v_spesifikasi_4	= strip_tags($this->input->post('vxspesifikasi4'));
				$spesifikasi_5		= strip_tags($this->input->post('xspesifikasi5'));
				$v_spesifikasi_5	= strip_tags($this->input->post('vxspesifikasi5'));
				$spesifikasi_6		= strip_tags($this->input->post('xspesifikasi6'));
				$v_spesifikasi_6	= strip_tags($this->input->post('vxspesifikasi6'));

				$this->m_product->simpan_product($nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6, $photo);
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/product');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/product');
			}
		}else{
				$nama				= strip_tags($this->input->post('xnama'));
				$title				= strip_tags($this->input->post('xtitle'));
				$ket				= strip_tags($this->input->post('xket'));
				$spesifikasi		= strip_tags($this->input->post('xspesifikasi'));
				$material			= strip_tags($this->input->post('xmaterial'));
				$spesifikasi_1		= strip_tags($this->input->post('xspesifikasi1'));
				$v_spesifikasi_1	= strip_tags($this->input->post('vxspesifikasi1'));
				$spesifikasi_2		= strip_tags($this->input->post('xspesifikasi2'));
				$v_spesifikasi_2	= strip_tags($this->input->post('vxspesifikasi2'));
				$spesifikasi_3		= strip_tags($this->input->post('xspesifikasi3'));
				$v_spesifikasi_3	= strip_tags($this->input->post('vxspesifikasi3'));
				$spesifikasi_4		= strip_tags($this->input->post('xspesifikasi4'));
				$v_spesifikasi_4	= strip_tags($this->input->post('vxspesifikasi4'));
				$spesifikasi_5		= strip_tags($this->input->post('xspesifikasi5'));
				$v_spesifikasi_5	= strip_tags($this->input->post('vxspesifikasi5'));
				$spesifikasi_6		= strip_tags($this->input->post('xspesifikasi6'));
				$v_spesifikasi_6	= strip_tags($this->input->post('vxspesifikasi6'));

			$this->m_product->simpan_product_tanpa_img($nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6 );
			echo $this->session->set_flashdata('msg','success');
			redirect('admin/product');
		}
	}
	
	function update_product()
	{
		$config['upload_path'] = './assets/images/product/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library']	='gd2';
				$config['source_image']		='./assets/images/product/'.$gbr['file_name'];
				$config['create_thumb']		= FALSE;
				$config['maintain_ratio']	= FALSE;
				$config['quality']			= '60%';
				$config['width']			= 300;
				$config['height']			= 300;
				$config['new_image']		= './assets/images/product/'.$gbr['file_name'];

				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$gambar = $this->input->post('gambar');
				$path='./assets/images/product/' . $gambar;
				unlink($path);

				$photo				= $gbr['file_name'];
				$kode				= $this->input->post('kode');
				$nama				= strip_tags($this->input->post('xnama'));
				$title				= strip_tags($this->input->post('xtitle'));
				$ket				= strip_tags($this->input->post('xket'));
				$spesifikasi		= strip_tags($this->input->post('xspesifikasi'));
				$material			= strip_tags($this->input->post('xmaterial'));
				$spesifikasi_1		= strip_tags($this->input->post('xspesifikasi1'));
				$v_spesifikasi_1	= strip_tags($this->input->post('vxspesifikasi1'));
				$spesifikasi_2		= strip_tags($this->input->post('xspesifikasi2'));
				$v_spesifikasi_2	= strip_tags($this->input->post('vxspesifikasi2'));
				$spesifikasi_3		= strip_tags($this->input->post('xspesifikasi3'));
				$v_spesifikasi_3	= strip_tags($this->input->post('vxspesifikasi3'));
				$spesifikasi_4		= strip_tags($this->input->post('xspesifikasi4'));
				$v_spesifikasi_4	= strip_tags($this->input->post('vxspesifikasi4'));
				$spesifikasi_5		= strip_tags($this->input->post('xspesifikasi5'));
				$v_spesifikasi_5	= strip_tags($this->input->post('vxspesifikasi5'));
				$spesifikasi_6		= strip_tags($this->input->post('xspesifikasi6'));
				$v_spesifikasi_6	= strip_tags($this->input->post('vxspesifikasi6'));

				$this->m_product->update_product($kode, $nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6, $photo);
				
				echo $this->session->set_flashdata('msg','info');
				redirect('admin/product');
				
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/product');
			}
			}else{
				$kode				= $this->input->post('kode');
				$nama				= strip_tags($this->input->post('xnama'));
				$title				= strip_tags($this->input->post('xtitle'));
				$ket				= strip_tags($this->input->post('xket'));
				$spesifikasi		= strip_tags($this->input->post('xspesifikasi'));
				$material			= strip_tags($this->input->post('xmaterial'));
				$spesifikasi_1		= strip_tags($this->input->post('xspesifikasi1'));
				$v_spesifikasi_1	= strip_tags($this->input->post('vxspesifikasi1'));
				$spesifikasi_2		= strip_tags($this->input->post('xspesifikasi2'));
				$v_spesifikasi_2	= strip_tags($this->input->post('vxspesifikasi2'));
				$spesifikasi_3		= strip_tags($this->input->post('xspesifikasi3'));
				$v_spesifikasi_3	= strip_tags($this->input->post('vxspesifikasi3'));
				$spesifikasi_4		= strip_tags($this->input->post('xspesifikasi4'));
				$v_spesifikasi_4	= strip_tags($this->input->post('vxspesifikasi4'));
				$spesifikasi_5		= strip_tags($this->input->post('xspesifikasi5'));
				$v_spesifikasi_5	= strip_tags($this->input->post('vxspesifikasi5'));
				$spesifikasi_6		= strip_tags($this->input->post('xspesifikasi6'));
				$v_spesifikasi_6	= strip_tags($this->input->post('vxspesifikasi6'));

				$this->m_product->update_product_tanpa_img($kode, $nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6);
				echo $this->session->set_flashdata('msg','info');
				redirect('admin/product');
			} 
	}

	function hapus_product()
	{
		$kode	= $this->input->post('kode');
		$gambar	= $this->input->post('gambar');
		$path	= './assets/images/product/'.$gambar;
		unlink($path);

		$this->m_product->hapus_product($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/product');
	}

}