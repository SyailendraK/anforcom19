<?php
class Pages extends CI_Controller{

    public function comingsoon(){
        $this->load->view('pages/comingsoon');
    }

    public function home(){
      $data['berita'] = $this->Berita_model->getAll_berita();

      $this->load->view('templates/header');
      $this->load->view('pages/index',$data);
      $this->load->view('templates/footer');
    }

    public function infolomba(){
        $this->load->view('templates/header!index');
        $this->load->view('pages/infolomba');
        $this->load->view('templates/footer');
    }  

    public function seminar(){
        $this->load->view('templates/header!index');
        $this->load->view('pages/seminar');
        $this->load->view('templates/footer');
    }  

    public function berita(){
        $this->load->view('templates/header!index');
        $this->load->view('pages/berita');
        $this->load->view('templates/footer');
    }

    public function announcement(){
        $this->load->view('templates/header!index');
        $this->load->view('pages/announcement');
        $this->load->view('templates/footer');
    }
    
}