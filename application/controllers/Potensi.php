<?php
class Potensi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['judul'] = 'Desa Cendil - Potensi Desa';
        $this->load->view('header' , $data);
		$this->load->view('potensi');
        $this->load->view('footer');
    }
}
?>