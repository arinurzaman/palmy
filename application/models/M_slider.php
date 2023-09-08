<?php
class M_slider extends CI_Model
{
	// Front End
	public function Get_Slider()
    {
        $query = $this->db->get('tbl_slider');
        return $query->result();
    }

	public function Insert_Slider($data)
    {
        return $this->db->insert('tbl_slider', $data);
    }

	public function Update_Slider($data, $where)
    {
        $this->db->update('tbl_slider', $data, $where);
        return TRUE;
    }

    public function Delete_Slider($where)
    {
        $this->db->where($where);
        $this->db->delete('tbl_slider');
        return TRUE;
    }
	// End Front End

	function get_all_slider()
	{
		$hsl=$this->db->query("SELECT * FROM tbl_slider");
		return $hsl;
	}
	
	function simpan_slider($gambar)
	{
		$this->db->trans_start();
		$this->db->query("insert into tbl_slider(slider_gambar) values ('$gambar')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	
	function update_galeri($galeri_id,$judul,$album,$user_id,$user_nama,$gambar){
		$hsl=$this->db->query("update tbl_galeri set galeri_judul='$judul',galeri_album_id='$album',galeri_pengguna_id='$user_id',galeri_author='$user_nama',galeri_gambar='$gambar' where galeri_id='$galeri_id'");
		return $hsl;
	}
	
	function hapus_galeri($kode,$album){
		$this->db->trans_start();
            $this->db->query("delete from tbl_galeri where galeri_id='$kode'");
            $this->db->query("update tbl_album set album_count=album_count-1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	//Front-End
	function get_galeri_home()
	{
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id ORDER BY galeri_id DESC limit 4");
		return $hsl;
	}

	function get_galeri_by_album_id($idalbum)
	{
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id where galeri_album_id='$idalbum' ORDER BY galeri_id DESC");
		return $hsl;
	}

	function tampil_data()
    {
        $this->db->order_by('galeri_gambar', 'DESC');
        $query = $this->db->get('tbl_galeri', 8);
        return $query->result();
    }
	

}