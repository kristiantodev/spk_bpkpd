  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{
         $query = $this->db->query("SELECT*FROM user");
         $data=array(
            "userku"=>$query->result(),
        );
		 $this->Mypage('isi/adm/user',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nm_user', 'nm_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/user');
        }else{
            $userPost = $_POST['username'];
            $cekQuery = $this->db->query("SELECT * FROM user WHERE username = '$userPost'")->result_array();
            if(count($cekQuery) <= 0){
            $idku = uniqid();
            $pass = password_hash ($_POST['password'], PASSWORD_DEFAULT);
            $data=array(
                "id_user" => $idku,
                "username"=>$_POST['username'],
                "password"=>$pass,
                "nm_user"=>$_POST['nm_user'],
                "level"=>$_POST['level'],
                "foto"=>"1.jpg",
            );
            $this->db->insert('user',$data);

            $this->session->set_flashdata('sukses',"berhasil");
        }else{
            $this->session->set_flashdata('sukses',"gagal");
        }
            redirect('adm/user');
        }
    }
    


public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/user');
        }else{
            
            $this->db->where('id_user', $id);
            $this->db->delete('user');
            $this->session->set_flashdata('sukses',"hapus");
            redirect('adm/user');
        }
    }


	
}
