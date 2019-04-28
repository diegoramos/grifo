<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Model {

var $table = 'salida_detalle';
	
    public function save_detail($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}

/* End of file Detail.php */
/* Location: ./application/models/Detail.php */