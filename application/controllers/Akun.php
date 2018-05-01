<?php
class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKeluhan');
        $this->load->model('ModelAkun');
    }
    public function index()
    {
        $datakeluhan = array(
          'keluhan' => $this->ModelKeluhan->get_data()
        );
        $this->load->view('index',$datakeluhan);
    }

    public function daftar_akun()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->ModelAkun->daftar_akun($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_daftar');
            redirect('Akun/index');
        }else{
            echo "<script>alert('Gagal Daftar Akun');window.location.href='index';</script>";

        }

    }

    public function cek_login()
    {
        $data = $this->input->post(null,TRUE);
        $login= $this->ModelAkun->login_akun($data);
        if($login){
            $sess_data=array(
                    'logged_in' => "Sudah Login",
                    'username' => $login->username,
                    'nama' => $login->namadep." ".$login->namabel,
                    'level' => "Admin"
            );
            $this->session->set_userdata($sess_data);
            $this->session->set_flashdata('alert','sukses_login');
            redirect('Akun/index');
        }else{
            $this->session->set_flashdata('alert', 'gagal_login');
            redirect('Akun/index');

        }

    }

    public function logout(){
        $array_items = array('level', 'username','nama','username', 'logged_in');
        $this->session->unset_userdata($array_items);
        redirect('Akun/index');
    }
    //CRUD
    public function add(){
    		$data = $this->input->post(null,TRUE);
        if($data['nama']){
          $insert = $this->ModelKeluhan->add_data($data);
          $this->session->set_flashdata('alert', 'sukses_insert');
          redirect('Akun/index');
        }else{
          echo "<script>alert('Gagal Menambahkan Data, Silakan Sign In Dahulu');window.location.href='index';</script>";
        }
	  }

    public function delete($id)
    {
        $hapus = $this->ModelKeluhan->delete_data($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('Akun/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');window.location.href='index';</script>";
        }
    }

    public function edit()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->ModelKeluhan->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('Akun/index');
        }else{
            echo "<script>alert('Gagal Edit Data');window.location.href='index';</script>";
        }
    }
}
?>
