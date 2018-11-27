<?php
class About extends Controller{
    public function index($nama = 'dian', $pekerjaan = 'dosen', $umur = 30)
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'page';
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}