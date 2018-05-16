<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
*
*/
class ModelKomentar extends CI_Model
{

	public function get_data_komentar()
	{
		$query = $this->db->order_by('id','DESC')->get('komentar');
		return $query->result();
	}

	public function add_komen($data)
	{
		$param = array(
					"idkomentar"=>$data['idkomentar'],
					"id"=>$data['id'],
					"komentar"=>$data['komentar'],
					"username"=>$data['username'],
					"tanggal"=>$data['tanggal']
		);
		$insert = $this->db->insert('komentar', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

	public function delete_komen($id){
			$this->db->where('idkomentar', $id);
			$delete = $this->db->delete('komentar');

			if ($delete){
					return TRUE;
			}else{
					return FALSE;
			}

	}
}
?>
