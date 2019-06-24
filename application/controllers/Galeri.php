<?php
class Galeri extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
   
    public function index()
    {
        $data['judul'] = 'Desa Cendil - Galeri';
        $this->load->view('header' , $data);
		$this->load->view('galeri');
        $this->load->view('footer');
    }
    
    public function foto()
    {
        $data['judul'] = 'Desa Cendil - Galeri Foto';
        $this->load->view('header' , $data);
		$this->load->view('foto');
        $this->load->view('footer');
    }
    
    public function video()
    {
        $data['judul'] = 'Desa Cendil - Galeri Video';
        $this->load->view('header' , $data);
		$this->load->view('video');
        $this->load->view('footer');
    }
}
?>