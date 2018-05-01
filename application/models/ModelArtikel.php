<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
*
*/
class ModelArtikel extends CI_Model
{

	public function get_data_artikel()
	{
		$query = $this->db->order_by('id','DESC')->get('artikel');
		return $query->result();
	}
}
?>
