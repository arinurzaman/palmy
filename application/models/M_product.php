<?php 
class M_product extends CI_Model
{
	function get_all_product()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_product");
		return $hsl;
	}

	function get_data($id) 
	{
        $query = $this->db->get_where('tbl_product', ['product_id' => $id]);
        return $query->row_array();
    }

	function simpan_product($nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6, $photo)
	{
		$hsl = $this->db->query("INSERT INTO tbl_product (product_nama,	product_title,	product_ket, product_spesifikasi, product_material, spesifikasi_1, v_spesifikasi_1, spesifikasi_2, v_spesifikasi_2, spesifikasi_3, v_spesifikasi_3, spesifikasi_4, v_spesifikasi_4, spesifikasi_5, v_spesifikasi_5, spesifikasi_6, v_spesifikasi_6, product_diameter, product_size, product_streght, product_photo) VALUES ('$nama', '$title', '$ket', '$spesifikasi' , '$material' , '$spesifikasi_1', '$v_spesifikasi_1', '$spesifikasi_2', '$v_spesifikasi_2', '$spesifikasi_3', '$v_spesifikasi_3', '$spesifikasi_4', '$v_spesifikasi_4', '$spesifikasi_5', '$v_spesifikasi_5', '$spesifikasi_6', '$v_spesifikasi_6','$photo')");
		return $hsl;
	}

	function simpan_product_tanpa_img($nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6)
	{
		$hsl=$this->db->query("INSERT INTO tbl_product (product_nama,	product_title,	product_ket, product_spesifikasi, product_material, spesifikasi_1, v_spesifikasi_1, spesifikasi_2, v_spesifikasi_2, spesifikasi_3, v_spesifikasi_3, spesifikasi_4, v_spesifikasi_4, spesifikasi_5, v_spesifikasi_5, spesifikasi_6, v_spesifikasi_6, product_diameter, product_size, product_streght) VALUES ('$nama', '$title', '$ket', '$spesifikasi', '$material' , '$spesifikasi_1', '$v_spesifikasi_1', '$spesifikasi_2', '$v_spesifikasi_2', '$spesifikasi_3', '$v_spesifikasi_3', '$spesifikasi_4', '$v_spesifikasi_4', '$spesifikasi_5', '$v_spesifikasi_5', '$spesifikasi_6', '$v_spesifikasi_6')");
		return $hsl;
	}

	function update_product($kode, $nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6, $photo)
	{
		$hsl = $this->db->query("UPDATE tbl_product SET product_nama = '$nama', product_title = '$title', product_ket = '$ket', product_spesifikasi = '$spesifikasi', product_material = '$material', spesifikasi_1 = '$spesifikasi_1', v_spesifikasi_1 = '$v_spesifikasi_1', spesifikasi_2 = '$spesifikasi_2', v_spesifikasi_2 = '$v_spesifikasi_2', spesifikasi_3 = '$spesifikasi_3', v_spesifikasi_3 = '$v_spesifikasi_3', spesifikasi_4 = '$spesifikasi_4', v_spesifikasi_4 = '$v_spesifikasi_4', spesifikasi_5 = '$spesifikasi_5', v_spesifikasi_5 = '$v_spesifikasi_5', spesifikasi_6 = '$spesifikasi_6', v_spesifikasi_6 = '$v_spesifikasi_6', product_photo = '$photo' WHERE product_id = '$kode'");
		return $hsl;
	}

	function update_product_tanpa_img($kode, $nama, $title, $ket, $spesifikasi, $material, $spesifikasi_1, $v_spesifikasi_1, $spesifikasi_2, $v_spesifikasi_2, $spesifikasi_3, $v_spesifikasi_3, $spesifikasi_4, $v_spesifikasi_4, $spesifikasi_5, $v_spesifikasi_5, $spesifikasi_6, $v_spesifikasi_6)
	{
		$hsl=$this->db->query("UPDATE tbl_product SET product_nama = '$nama', product_title = '$title', product_ket = '$ket', product_spesifikasi = '$spesifikasi', product_material = '$material', spesifikasi_1 = '$spesifikasi_1', v_spesifikasi_1 = '$v_spesifikasi_1', spesifikasi_2 = '$spesifikasi_2', v_spesifikasi_2 = '$v_spesifikasi_2', spesifikasi_3 = '$spesifikasi_3', v_spesifikasi_3 = '$v_spesifikasi_3', spesifikasi_4 = '$spesifikasi_4', v_spesifikasi_4 = '$v_spesifikasi_4', spesifikasi_5 = '$spesifikasi_5', v_spesifikasi_5 = '$v_spesifikasi_5', spesifikasi_6 = '$spesifikasi_6', v_spesifikasi_6 = '$v_spesifikasi_6' WHERE product_id = '$kode'");
		return $hsl;
	}

	function hapus_product($kode)
	{
		$hsl=$this->db->query("DELETE FROM tbl_product WHERE product_id = '$kode'");
		return $hsl;
	}

	//front-end
	function product()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_product");
		return $hsl;
	}
	function product_perpage($offset,$limit)
	{
		$hsl=$this->db->query("SELECT * FROM tbl_product limit $offset,$limit");
		return $hsl;
	}

	function tampil_data()
    {
        $this->db->order_by('product_id', 'ASC');
        $query = $this->db->get('tbl_product');
        return $query->result();
    }

	function tampil_data_product()
    {
        $this->db->order_by('product_id', 'ASC');
        $query = $this->db->get('tbl_product');
        return $query->result();
    }
}