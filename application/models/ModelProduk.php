<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
*
*/
class ModelProduk extends CI_Model
{
  public function get_data_produk()
  {
    $query = $this->db->order_by('idproduk','ASC')->get('produk');
    return $query->result();
  }
}
?>
