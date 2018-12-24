<?php

class Ustadz extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Ustadz';
        $data['ust'] = $this->model('Ustadz_model')->getAllUstadz();
        $this->view('templates/header', $data);
        $this->view('ustadz/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul'] =  'Detail Ustadz';
        $data['ust'] = $this->model('Ustadz_model')->getUstadzById($id);
        $this->view('templates/header', $data);
        $this->view('ustadz/detail', $data);
        $this->view('templates/footer');
    }
}