  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Subag BPKPD"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{
  
      
         $dataArray=array(
            "profilPT" => "",
                  );
		 $this->Mypage('isi/subag/dashboard', $dataArray);
	}

    
	
}
