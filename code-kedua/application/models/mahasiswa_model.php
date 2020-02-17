<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Controller
{

    public function getAllMahasiswa()
    {

        //atau bisa juga menggunakan code berikut
        return $this->db->get('mahasiswa')->result_array();
    }
}

/* End of file Controllername.php */
