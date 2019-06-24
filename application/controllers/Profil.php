<?php
class Profil extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['judul'] = 'Desa Cendil - Profil Desa';
        $this->load->view('header' , $data);
		$this->load->view('profil');
        $this->load->view('footer');
    }
}
?>