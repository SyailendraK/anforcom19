<?php
  class AdminAV18 extends CI_Controller{
    //LOGIN HARDCODE email = uhuyAdminAV18@anforcom.com, pass = uhuyAdminAV18
    
    public function login(){
      if($this->session->userdata('supreme')){
        redirect('adminAV18');
      }

      $this->load->view('admin/login');
    }

    public function login_admin(){
      if($this->session->userdata('supreme')){
        redirect('adminAV18');
      }

      $this->form_validation->set_rules('email', 'E-mail', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view("admin/login");
      } else {

        if($this->input->post('email') == "uhuyAdminAV18@anforcom.com" && $this->input->post('password') == "uhuyAdminAV18"){
          $user_data = array(
            'supreme' => TRUE
          );

          $this->session->set_userdata($user_data);
          
          redirect('adminAV18');
        } else {
          redirect('adminAV18');
        }

      }
    }

    public function logout(){
      if(!$this->session->userdata('supreme')){
        redirect('index');
      }
      
      $this->session->unset_userdata('supreme');

      redirect('adminAV18');
    }

    public function index(){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $data['peserta'] = $this->Peserta_model->getAll_peserta();
      $data['berita'] = $this->Berita_model->getAll_berita();

      $this->load->view('admin/admin', $data);
    }

    public function view_profile($id){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $data['peserta'] = $this->Peserta_model->get_peserta($id);

      $this->load->view('admin/view-profile', $data);
      $this->load->view('templates/footer');
    }

    public function add_berita(){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $this->form_validation->set_rules('judul', 'Judul', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view("admin/index");
      } else{
        $config['upload_path'] = './assets/berita';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '10000';
        $config['file_name'] = "berita-".url_title($this->input->post('judul'),'-',TRUE)."-(".date("Y-m-d").")(".date("h-i-sa").")";

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile')){
          $errors = array('error' => $this->upload->display_errors());
        } else {
          $data = array('upload_data' => $this->upload->data());
          $pic = $this->upload->data('file_name');
        }

        $this->Berita_model->add_berita($pic);
        redirect('adminAV18');
      }
    }

    public function edit_berita(){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $data['berita'] = $this->Berita_model->get_berita($this->input->post('id'));

      $this->load->view('admin/edit-berita', $data);
    }    

    public function update_berita(){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $this->form_validation->set_rules('judul', 'Judul', 'required');

      if($this->form_validation->run() === FALSE){
        redirect('adminAV18');
        } else{
        // UPLOAD KTM KETUA
        $config['upload_path'] = './assets/berita';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '10000';
        $config['file_name'] = "berita-".url_title($this->input->post('judul'),'-',TRUE)."-(".date("Y-m-d").")(".date("h-i-sa").")";

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile')){
          $errors = array('error' => $this->upload->display_errors());
          $pic = $this->input->post('default_pic');
        } else {
          $data = array('upload_data' => $this->upload->data());
          $pic = $this->upload->data('file_name');
        }

        $this->Berita_model->update_berita($pic);
        redirect('adminAV18');
      }
    }

    public function delete_berita(){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $this->Berita_model->delete_berita();
      redirect('adminAV18');      
    }

    public function verif(){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $this->Peserta_model->verif();
      redirect('adminAV18');
    }

    public function unverif(){
      if(!$this->session->userdata('supreme')){
        redirect('adminAV18/login');
      }

      $this->Peserta_model->unverif();
      redirect('adminAV18');
    }
  }
?>