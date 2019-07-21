<?php
class Berita extends CI_Controller{ 
  public function view_berita($id){
    $data['berita'] = $this->Berita_model->get_berita($id);
    $data['index'] = $this->Berita_model->getAll_berita();

    $this->load->view('templates/header!index');
    $this->load->view('pages/berita',$data);
    $this->load->view('templates/footer');
  }

  public function index_berita(){
    $data['berita'] = $this->Berita_model->getAll_berita();

    $this->load->view('templates/header!index');
    $this->load->view('pages/index_berita',$data);
    $this->load->view('templates/footer');
  }
}
?>