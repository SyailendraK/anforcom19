<?php
  class Peserta_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function getAll_peserta(){
      $query = $this->db->get('peserta');
      return $query->result_array();
    }

    public function get_peserta($id){
      $query = $this->db->get_where('peserta', array('id' => $id));
      
      return $query->row_array();
    }

    public function create_peserta($ktm_ketua,$ktm_anggota1,$ktm_anggota2){
      $data = array(
        'nama_pt' => $this->input->post('nama_pt'),
        'nama_tim' => $this->input->post('nama_tim'),
        'nama_ketua' => $this->input->post('nama_ketua'),
        'email_ketua' => $this->input->post('email_ketua'),
        'nim_ketua' => $this->input->post('nim_ketua'),
        'ktm_ketua' => $ktm_ketua,
        'password' => $this->input->post('password'),
        'nama_anggota1' => $this->input->post('nama_anggota1'),
        'nim_anggota1' => $this->input->post('nim_anggota1'),
        'ktm_anggota1' => $ktm_anggota1,
        'nama_anggota2' => $this->input->post('nama_anggota2'),
        'nim_anggota2' => $this->input->post('nim_anggota2'),
        'ktm_anggota2' => $ktm_anggota2
      );

      return $this->db->insert('peserta',$data);
    }

    public function update_peserta($ktm_ketua,$ktm_anggota1,$ktm_anggota2){
      $data = array(
        'nama_pt' => $this->input->post('nama_pt'),
        'nama_tim' => $this->input->post('nama_tim'),
        'nama_ketua' => $this->input->post('nama_ketua'),
        'email_ketua' => $this->input->post('email_ketua'),
        'nim_ketua' => $this->input->post('nim_ketua'),
        'ktm_ketua' => $ktm_ketua,
        'password' => $this->input->post('password'),
        'nama_anggota1' => $this->input->post('nama_anggota1'),
        'nim_anggota1' => $this->input->post('nim_anggota1'),
        'ktm_anggota1' => $ktm_anggota1,
        'nama_anggota2' => $this->input->post('nama_anggota2'),
        'nim_anggota2' => $this->input->post('nim_anggota2'),
        'ktm_anggota2' => $ktm_anggota2
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('peserta', $data);
    }

    public function login($email, $password){
      $this->db->where('email_ketua', $email);
      $this->db->where('password', $password);

      $result = $this->db->get('peserta');

      if($result->num_rows() == 1){
        return $result->row(0)->id;
      } else{
        return false;
      }
    }

    public function upload_bukti($bukti){
      $data = array(
        'bukti_pembayaran' => $bukti
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('peserta', $data);
    }

    public function upload_proposal($proposal){
      $data = array(
        'proposal' => $proposal
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('peserta', $data);
    }

    public function upload_video($video){
      $data = array(
        'video' => $video
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('peserta', $data);
    }

    public function upload_prototipe($prototipe, $link_prototipe){
      $data = array(
        'prototipe' => $prototipe,
        'link_prototipe' => $link_prototipe
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('peserta', $data);
    }

    public function verif(){
      $data = array(
        'verifikasi' => 1
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('peserta', $data);

    }

    public function unverif(){
      $data = array(
        'verifikasi' => 0
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('peserta', $data);

    }

    // public function check_team_exists($nama_tim){
    //   $query = $this->db->get_where('peserta',array('nama_tim' => $nama_tim));
    //   if(empty($query->row_array())){
    //     return TRUE;
    //   } else{
    //     return FALSE;
    //   }
    // }

    // public function check_email_exists($email){
    //   $query = $this->db->get_where('peserta',array('email_ketua' => $email));
    //   if(empty($query->row_array())){
    //     return TRUE;
    //   } else{
    //     return FALSE;
    //   }
    // }

  }
?>