<?php
class Ajax extends CI_Controller{

    /*
    Class ini fungsinya untuk ajax yang menjadi alamat base_url/ajax/"Nama Method"
    Didalam method bisa dibuat $this->Nama Model->$parameter(); untuk memanggil fungsi/prosedur di dalam model,
    jadi otomatis untuk nyari methodnya di dalam model.

    By Mahendra Fajar 
    */

    public function Peserta($parameter = NULL){
        $this->Peserta_model->$parameter();
    }
}