<?php
  class Peserta extends CI_Controller{
    public function register(){
      if($this->session->userdata('logged_in')){
        redirect('index');
      }

      $this->load->view('peserta/register');
      $this->load->view('templates/footer');
    }

    public function login(){
      if($this->session->userdata('logged_in')){
        redirect('index');
      }

      $this->load->view('peserta/login');
    }

    public function forget(){
      if($this->session->userdata('logged_in')){
        redirect('index');
      }

      $this->load->view('peserta/forget');
    }

    public function team(){
      if(!$this->session->userdata('logged_in')){
        redirect('peserta/login');
      }

      $data['team'] = $this->Peserta_model->get_peserta($this->session->userdata('user_id'));

      $this->load->view('templates/header!index');
      $this->load->view('peserta/team',$data);
      $this->load->view('templates/footer');
    }

    public function register_peserta(){
      if($this->session->userdata('logged_in')){
        redirect('index');
      }

      $this->form_validation->set_rules('nama_tim', 'Nama Tim', 'callback_check_team_exists');
      $this->form_validation->set_rules('email_ketua', 'Email Ketua', 'callback_check_email_exists');
      $this->form_validation->set_rules('verif_pass', 'Verifikasi Password', 'callback_check_password_match');
      $this->form_validation->set_rules('nama_anggota1', 'Anggota 1', 'callback_check_anggota1_exists');
      $this->form_validation->set_rules('nim_anggota1', 'Anggota 1', 'callback_check_anggota1_exists');
      $this->form_validation->set_rules('nama_anggota2', 'Anggota 2', 'callback_check_anggota2_exists');
      $this->form_validation->set_rules('nim_anggota2', 'Anggota 2', 'callback_check_anggota2_exists');

      if($this->form_validation->run() === FALSE){
        $this->load->view("peserta/register");
      } else{
        // UPLOAD KTM KETUA
        $config['upload_path'] = './assets/ktm';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '10000';
        $config['file_name'] = url_title($this->input->post('nama_tim'),'-',TRUE);

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile1')){
          $errors = array('error' => $this->upload->display_errors());
        } else {
          $data = array('upload_data' => $this->upload->data());
          $ktm_ketua = $this->upload->data('file_name');
        }

        if(!$this->upload->do_upload('userfile2')){
          $errors = array('error' => $this->upload->display_errors());
          $ktm_anggota1 = NULL;
        } else{
          $data = array('upload_data' => $this->upload->data());
          $ktm_anggota1 = $this->upload->data('file_name');
        }

        if(!$this->upload->do_upload('userfile3')){
          $errors = array('error' => $this->upload->display_errors());
          $ktm_anggota2 = NULL;
        } else{
          $data = array('upload_data' => $this->upload->data());
          $ktm_anggota2 = $this->upload->data('file_name');
        }

        $this->Peserta_model->create_peserta($ktm_ketua,$ktm_anggota1,$ktm_anggota2);
        redirect('index');
      }
    }

    public function update_peserta(){
      if(!$this->session->userdata('logged_in')){
        redirect('index');
      }

      $this->form_validation->set_rules('nama_tim', 'Nama Tim', 'callback_check_team_exists_update');
      $this->form_validation->set_rules('email_ketua', 'Email Ketua', 'callback_check_email_exists_update');
      $this->form_validation->set_rules('verif_pass', 'Verifikasi Password', 'callback_check_password_match');
      $this->form_validation->set_rules('nama_anggota1', 'Anggota 1', 'callback_check_anggota1_exists');
      $this->form_validation->set_rules('nim_anggota1', 'Anggota 1', 'callback_check_anggota1_exists');
      $this->form_validation->set_rules('nama_anggota2', 'Anggota 2', 'callback_check_anggota2_exists');
      $this->form_validation->set_rules('nim_anggota2', 'Anggota 2', 'callback_check_anggota2_exists');

      if($this->form_validation->run() === FALSE){
        $data['team'] = $this->Peserta_model->get_peserta($this->session->userdata('user_id'));

        $this->load->view('templates/header!index');
        $this->load->view('peserta/team',$data);
        $this->load->view('templates/footer');
        } else{
        // UPLOAD KTM KETUA
        $config['upload_path'] = './assets/ktm';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '10000';
        $config['file_name'] = url_title($this->input->post('nama_tim'),'-',TRUE);

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile1')){
          $errors = array('error' => $this->upload->display_errors());
          $ktm_ketua = $this->input->post('default_ktm_ketua');
        } else {
          $data = array('upload_data' => $this->upload->data());
          $ktm_ketua = $this->upload->data('file_name');
        }

        if(!$this->upload->do_upload('userfile2')){
          $errors = array('error' => $this->upload->display_errors());
          $ktm_anggota1 = $this->input->post('default_ktm_anggota1');;
        } else{
          $data = array('upload_data' => $this->upload->data());
          $ktm_anggota1 = $this->upload->data('file_name');
        }

        if(!$this->upload->do_upload('userfile3')){
          $errors = array('error' => $this->upload->display_errors());
          $ktm_anggota2 = $this->input->post('default_ktm_anggota2');;
        } else{
          $data = array('upload_data' => $this->upload->data());
          $ktm_anggota2 = $this->upload->data('file_name');
        }

        $this->Peserta_model->update_peserta($ktm_ketua,$ktm_anggota1,$ktm_anggota2);
        redirect('team');
      }
    }

    public function login_peserta(){
      if($this->session->userdata('logged_in')){
        redirect('index');
      }

      $this->form_validation->set_rules('email', 'E-mail', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view("peserta/login");
      } else {

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $peserta_id = $this->Peserta_model->login($email, $password);

        if($peserta_id){
          $user_data = array(
            'user_id' => $peserta_id,
            'logged_in' => TRUE
          );

          $this->session->set_userdata($user_data);
          
          redirect('peserta/team');
        } else {
          redirect('login');
        }

      }
    }

    public function logout(){
      if(!$this->session->userdata('logged_in')){
        redirect('index');
      }
      
      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('user_id');

      redirect('index');
    }

    public function upload_bukti(){
      if(!$this->session->userdata('logged_in')){
        redirect('login');
      }

      $config['upload_path'] = './assets/bukti';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size'] = '10000';
      $config['file_name'] = url_title($this->input->post('nama_tim'),'-',TRUE);

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('userfile')){
        $errors = array('error' => $this->upload->display_errors());
      } else {
        $data = array('upload_data' => $this->upload->data());
        $bukti = $this->upload->data('file_name');
      }

      $this->Peserta_model->upload_bukti($bukti);
      redirect('team');
    }

    public function upload_proposal(){
      if(!$this->session->userdata('logged_in')){
        redirect('login');
      }

      $config['upload_path'] = './assets/proposal';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '5000';
      $config['file_name'] = "proposal-".url_title($this->input->post('nama_tim'),'-',TRUE)."-(".date("Y-m-d").")(".date("h-i-sa").")";

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('userfile')){
        $errors = array('error' => $this->upload->display_errors());
        die(print_r($errors));
      } else {
        $data = array('upload_data' => $this->upload->data());
        $proposal = $this->upload->data('file_name');
      }

      $this->Peserta_model->upload_proposal($proposal);
      redirect('team');
    }

    public function upload_video(){
      if(!$this->session->userdata('logged_in')){
        redirect('login');
      }

      $video = $this->input->post('video');

      $this->Peserta_model->upload_video($video);
      redirect('team');
    }

    public function upload_prototipe(){
      if(!$this->session->userdata('logged_in')){
        redirect('login');
      }

      $config['upload_path'] = './assets/prototipe';
      $config['allowed_types'] = 'rar|zip';
      $config['max_size'] = '5000';
      $config['file_name'] = "prototipe-".url_title($this->input->post('nama_tim'),'-',TRUE)."-(".date("Y-m-d").")(".date("h-i-sa").")";

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('userfile')){
        $errors = array('error' => $this->upload->display_errors());
        $prototipe = $this->input->post('default_prototipe');
      } else {
        $data = array('upload_data' => $this->upload->data());
        $prototipe = $this->upload->data('file_name');
      }

      $link_prototipe = $this->input->post('link_prototipe');

      $this->Peserta_model->upload_prototipe($prototipe, $link_prototipe);
      redirect('team');
    }

    // public function check_team_exists($nama_tim){
    //   $this->form_validation->set_message('check_team_exists', 'Nama tim telah dipakai. Silahkan pilih nama tim lain.');

    //   if($this->Peserta_model->check_team_exists($nama_tim)){
    //     return TRUE;
    //   } else {
    //     return FALSE;
    //   }
    // }

    public function check_team_exists_update($nama_tim){
      $this->form_validation->set_message('check_team_exists', 'Nama tim telah dipakai. Silahkan pilih nama tim lain.');

      if($this->Peserta_model->check_team_exists($nama_tim) || $nama_tim == $this->input->post('default_nama_tim')){
        return TRUE;
      } else {
        return FALSE;
      }
    }

    public function check_email_exists($email_ketua){
      $this->form_validation->set_message('check_email_exists', 'Email yang dicantumkan telah dipakai. Silahkan pilih email lain.');

      if($this->Peserta_model->check_email_exists($email_ketua)){
        return TRUE;
      } else {
        return FALSE;
      }
    }

    public function check_email_exists_update($email_ketua){
      $this->form_validation->set_message('check_email_exists', 'Email yang dicantumkan telah dipakai. Silahkan pilih email lain.');

      if($this->Peserta_model->check_email_exists($email_ketua) || $email_ketua == $this->input->post('default_email_ketua')){
        return TRUE;
      } else {
        return FALSE;
      }
    }

    public function check_password_match($password){
      $this->form_validation->set_message('check_password_match', 'Kata Sandi yang anda masukkan tidak sesuai!');

      if($this->input->post('password') === $password){
        return TRUE;
      } else {
        return FALSE;
      }
    }

    // public function check_anggota1_exists($nama_anggota1){
    //   $this->form_validation->set_message('check_anggota1_exists', 'Data Anggota 1 tidak lengkap. Cantumkan data anggota 1 secara lengkap!');

    //   if(!empty($nama_anggota1) && !empty($this->input->post('nim_anggota1'))){
    //     return TRUE;
    //   } else if(empty($nama_anggota1) && empty($this->input->post('nim_anggota1'))){
    //     return TRUE;
    //   } else{
    //     return FALSE;
    //   }
    // }

    // public function check_anggota2_exists($nama_anggota2){
    //   $this->form_validation->set_message('check_anggota2_exists', 'Data Anggota 2 tidak lengkap. Cantumkan data anggota 2 secara lengkap!');

    //   if(!empty($nama_anggota2) && !empty($this->input->post('nim_anggota2'))){
    //     return TRUE;
    //   } else if(empty($nama_anggota2) && empty($this->input->post('nim_anggota2'))){
    //     return TRUE;
    //   } else{
    //     return FALSE;
    //   }
    // }

  }
?>