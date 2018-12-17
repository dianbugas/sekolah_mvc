<?php

class Ustadz extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Ustadz';
        $data['ust'] = $this->model('Ustadz_model')->getAllUstadz();
        $this->view('templates/header', $data);
        $this->view('Ustadz/index', $data);
        $this->view('templates/footer');
    }
}