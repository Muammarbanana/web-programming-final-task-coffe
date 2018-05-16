<?php
class ModelAkun extends CI_Model
{
  public function daftar_akun($data)
  {
    $param = array(
      "namabel"=>$data['namabel'],
      "namadep"=>$data['namadep'],
      "email"=>$data['email'],
      "username"=>$data['username'],
      "password"=>$data['password']
    );
    $this->db->where('username',$data['username']);
    $result = $this->db->get('akun');
    if($result->num_rows()==1){
      echo "<script>alert('Username Sudah Ada');</script>";
    }else{
      $insert = $this->db->insert('akun', $param);
      if ($insert){
        return TRUE;
      }else{
        return FALSE;
      }
    }
  }

  public function login_akun($data){
    $this->db->where('email',$data['email']);
    $this->db->where('password',$data['password']);

    $result = $this->db->get('akun');
    if($result->num_rows()==1){
      return $result->row(0);
    }else{
      return false;
    }
  }
}
?>
