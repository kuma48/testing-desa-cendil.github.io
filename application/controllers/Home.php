<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
	public function index()
	{
        $data['judul'] = 'Desa Cendil - Selamat Datang!';
        $this->load->view('header' , $data);
		$this->load->view('index');
        $this->load->view('footer');
	}
}
