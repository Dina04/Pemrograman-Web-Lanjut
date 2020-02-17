<?php
defined('BASEPATH') or exit('No direct script access allowed');
class mahasiswa extends CI_Controller
{

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
        //digunakan untuk menjalankan fungsi constrauct pada class parrent(ci_controller)
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {

        //modul untuk load database
        //$this->load->database();
        $data['title'] = 'List Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['title'] = 'Form Menambahkan Data Mahasiswa';

        if ($this->$this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tamba', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            echo "data berhasil ditambah";
        }
    }
}

/* End of file Controllername.php */
