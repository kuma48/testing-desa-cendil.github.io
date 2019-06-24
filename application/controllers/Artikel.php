<?php
class Artikel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['judul'] = 'Desa Cendil - Artikel Terbaru';
        $this->load->view('header' , $data);
		$this->load->view('artikel');
        $this->load->view('footer');
    }
}
?>