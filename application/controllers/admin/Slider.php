<?php
class Slider extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE)
		{
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_slider');
		$this->load->library('upload');
	}

	public function index()
    {
        $data['slider']  = $this->m_slider->Get_Slider();
        $this->load->view('admin/v_slider',$data);
    }
	
	public function upload()
    {
        // Get File
        $config['upload_path']   = './assets/images/slider/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = $_FILES['image']['name'];

        $this->load->library('upload', $config);

        if (!empty($_FILES['image']['name'])) {
            if ($this->upload->do_upload('image')) 
			{
                $image      = $this->upload->data();
                $data       = array(
                    'image' => $image['file_name']
                );

				var_dump($data['data']);
				die;
				
                $this->M_slider->Insert_Slider($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Slider Berhasil Ditambahkan </div>');
                redirect('admin/slider');
            } else {
                die("gagal upload");
            }
        } else {
            echo "file yang anda upload tidak masuk";
        }
    }

	public function edit($id)
    {
        $data['title']              = 'Edit Galeri';
        $data['user']               = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['foto']               = $this->M_admin->Get_Image(['tb_galeri.id' => $id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/Edit_galeri', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id     = $this->input->post('id');
        $title  = $this->input->post('title');
        $prodi  = $this->input->post('prodi');

        $path        = './upload/galeri/';
        $where       = array('id' => $id);

        // get file
        $config['upload_path']   = './assets/images/slider/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['file_name']     = $_FILES['image']['name'];

        $this->load->library('upload', $config);

        if (!empty($_FILES['image']['name'])) {
            if ($this->upload->do_upload('image')) {
                $file = $this->upload->data();
                $data = array(
                    'title'   => $title,
                    'prodi'   => $prodi,
                    'image'   => $file['file_name']
                );

                // hapus file pada direktori
                @unlink($path . $this->input->post('filelama'));
                $this->M_admin->Update_Image($data, $where);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto Berhasil Diupdate</div>');
                redirect('admin/Galeri');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }

    public function delete($slider_id, $slider_gambar)
    {
        $path = './assets/images/slider/';
        @unlink($path . $slider_gambar);

        $where = array('slider_id' => $slider_id);
        $this->M_slider->Delete_Slider($where);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Slider Berhasil Di Hapus</div>');
        redirect('admin/slider');
    }
	
	
	function simpan_slider()
	{
		$config['upload_path'] = './assets/images/slider'; //path folder
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
					$config['source_image']		='./assets/images/slider/'.$gbr['file_name'];
					$config['create_thumb']		= FALSE;
					$config['maintain_ratio']	= FALSE;
					$config['quality']			= '100%';
					$config['new_image']		= './assets/images/slider/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$gambar	= $gbr['file_name'];
					$this->m_slider->simpan_slider($gambar);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/slider');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/slider');
			}
		}else{
			redirect('admin/slider');
		}
	}
	
	function update_galeri(){
				
	            $config['upload_path'] = './assets/images/slider/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/slider/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 500;
	                        $config['height']= 400;
	                        $config['new_image']= './assets/images/slider/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $galeri_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$album=strip_tags($this->input->post('xalbum'));
							$images=$this->input->post('gambar');
							$path='./assets/images/'.$images;
							unlink($path);
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_galeri->update_galeri($galeri_id,$judul,$album,$user_id,$user_nama,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/galeri');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/galeri');
	                }
	                
	            }else{
							$galeri_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$album=strip_tags($this->input->post('xalbum'));
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_galeri->update_galeri_tanpa_img($galeri_id,$judul,$album,$user_id,$user_nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/galeri');
	            } 

	}

	function hapus_galeri(){
		$kode=$this->input->post('kode');
		$album=$this->input->post('album');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/slider/'.$gambar;
		unlink($path);
		$this->m_galeri->hapus_galeri($kode,$album);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/galeri');
	}

}