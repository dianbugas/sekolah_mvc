<?php
    class Mahasiswa extends Controller{
        public function index(){
            $data['judul'] = 'Daftar Mahasiswa';
            $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
            $this->view('templates/header', $data);
            $this->view('mahasiswa/index', $data);
            $this->view('templates/footer');
        }
        public function detail($id){  //ngambil
            $data['judul'] = 'Detail Mahasiswa';
            $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id); // idnya nambil dari atas
            $this->view('templates/header', $data);
            $this->view('mahasiswa/detail', $data);
            $this->view('templates/footer');
        }
    }