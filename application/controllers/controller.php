<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controller extends CI_Controller {

    public function __construct()
{
    parent::__construct();
        $this->load->model('m_petugas');

        
    
}

    public function awal()
    {
        $this->load->view('menu');
        
    }
    public function registrasion()
    {
        $email = $this->input->post('Email');
        $password = $this->input->post('Password');
        $nama = $this->input->post('Nama');
        $alamat = $this->input->post('Alamat');
        $arr = array(
            'Nama' => $nama,
            'Email' => $email,
            'Password' => $password,
            'Alamat' => $alamat
        ); 
        $this->m_petugas->register($arr,'petugas');
        redirect('controller/tampil');
    }
    public function tampil(){
    $arr['data'] = $this->m_petugas->view()->result();
    $this->load->view('listpetugas', $arr);
    
    }
    public function cari()
	{
		$arr['data'] = $this->m_petugas->caripetugas();
		$this->load->view('listpetugas', $arr,);
	}

}

/* End of file controller.php */

?>