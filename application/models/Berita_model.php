<?php
  class Berita_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function getAll_berita(){
      $query = $this->db->get('berita');
      return $query->result_array();
    }

    public function get_berita($id){
      $query = $this->db->get_where('berita', array('id' => $id));
      
      return $query->row_array();
    }

    public function add_berita($pic){
      $data = array(
        'judul' => $this->input->post('judul'),
        'content' => $this->input->post('content'),
        'pic' => $pic
      );

      return $this->db->insert('berita',$data);
    }

    public function update_berita($pic){
      $data = array(
        'judul' => $this->input->post('judul'),
        'content' => $this->input->post('content'),
        'pic' => $pic
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('berita', $data);
    }

    public function delete_berita(){
      $this->db->where('id', $this->input->post('id'));
      $this->db->delete('berita');
      return true;
    }

  }
?>