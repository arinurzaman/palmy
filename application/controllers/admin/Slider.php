<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_slider');
        $this->load->library('upload');
    }

    public function index()
    {
      
        $data['image']  = $this->m_slider->get_slider();
        $this->load->view('admin/v_slider', $data);
    }

    public function upload()
    {
        $title              = $this->input->post('title');
        // Get File
        $config['upload_path']   = './assets/images/slider';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = $_FILES['image']['name'];

        $this->load->library('upload', $config);

        if (!empty($_FILES['image']['name'])) {
            if ($this->upload->do_upload('image')) {
                $image  = $this->upload->data();
                $data   = array(
                    'title'             => $title,
                    'image'             => $image['file_name']
                );

                $this->m_slider->insert($data);
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
        $config['upload_path']   = './upload/galeri/';
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

    public function delete($id, $image)
    {
        $path = './upload/galeri/';
        @unlink($path . $image);

        $where = array('id' => $id);
        $this->M_admin->Delete_Image($where);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Foto Berhasil Di Hapus</div>');
        redirect('admin/Galeri');
    }
}