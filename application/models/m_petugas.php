<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class m_petugas extends CI_Model {

    public function register($data,$table)
    {
        $this->db->insert($table, $data);
        
    }
    public function view()
    {
        return $this->db->get('petugas');
        
    }
    public function caripetugas()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from petugas where Nama like '%$cari%' ");
		return $data->result();
	}

}

/* End of file ModelName.php */


?>