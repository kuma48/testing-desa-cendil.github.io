<?php
class Kontak extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['judul'] = 'Desa Cendil - Kontak Kami';
        $this->load->view('header' , $data);
		$this->load->view('kontak');
        $this->load->view('footer');
    }
}
?>