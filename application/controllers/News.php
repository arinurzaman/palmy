<?php
class News extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_tulisan');
	}

	public function index()
	{
		$data['news'] 	    = $this->m_tulisan->tampil_data();
        $this->load->view('v_news', $data);
    }

	public function detail($slugs)
	{
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_tulisan', array('tulisan_slug' => $slug));
		
		if($query->num_rows() > 0)
		{
			$b 		= $query->row_array();
			$kode	= $b['tulisan_id'];
			
			$this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			
			$data				= $this->m_tulisan->get_berita_by_kode($kode);
			$row				= $data->row_array();
			$x['id']			= $row['tulisan_id'];
			$x['title']			= $row['tulisan_judul'];
			$x['image']			= $row['tulisan_gambar'];
			$x['blog'] 			= $row['tulisan_isi'];
			$x['tanggal']		= $row['tanggal'];
			$x['author']		= $row['tulisan_author'];
			$x['kategori']		= $row['tulisan_kategori_nama'];
			$x['slug']			= $row['tulisan_slug'];
			$x['show_komentar']	= $this->m_tulisan->show_komentar_by_tulisan_id($kode);
			$x['category']		= $this->db->get('tbl_kategori');
			$x['populer']		= $this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			$this->load->view('v_news_detail',$x);
		}else{
			redirect('News');
		}
	}
		
}