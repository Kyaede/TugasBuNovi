<?php
class Keahlian extends Controller {
    public function index()
    {
        $data['judul'] = "Keahlian";
        $data['nama'] = $this->model('Keahlian_model')->getKeahlian();
        $this->view('templates/header', $data);
        $this->view('Keahlian/index', $data);
        $this->view('templates/footer');
    }
}
?>