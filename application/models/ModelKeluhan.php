<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
*
*/
class ModelKeluhan extends CI_Model
{

	public function get_data()
	{
		$query = $this->db->order_by('id','DESC')->get('keluhan');
		return $query->result();
	}

	public function add_data($data)
	{
		$param = array(
					"nama"=>$data['nama'],
					"username"=>$data['username'],
					"keluhan"=>$data['keluhan']
		);
		$insert = $this->db->insert('keluhan', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

    public function edit_data($data){
	      $table = 'keluhan';
        $param = array(
            "keluhan"=>$data['keluhan']
        );
        $this->db->where('id', $data['id']);
        $update = $this->db->update('keluhan',$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }

    public function delete_data($id){
        $table = 'keluhan';
        $this->db->where('id', $id);
        $delete = $this->db->delete('keluhan');

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}

?>
