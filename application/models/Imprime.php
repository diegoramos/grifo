<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprime extends CI_Model {

	public function get_print($value='')
	{
		$this->db->select('*');
		$this->db->from('salida');
		$this->db->join('salida_detalle', 'salida.id = salida_detalle.salida', 'left');
		//$this->db->where('Field / comparison', $Value);
		$query = $this->db->get();

		return $query->result();
	}

	public function get_print_id($id)
	{
		$this->db->select('*,salida.sub subtotal');
		$this->db->from('salida');
		//$this->db->join('salida_detalle', 'salida.id = salida_detalle.salida', 'left');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_print_detale_id($id)
	{
		$this->db->select('*');
		$this->db->from('salida_detalle');
		$this->db->where('salida', $id);
		$query = $this->db->get();

		return $query->result();
	}

}

/* End of file Print.php */
/* Location: ./application/models/Print.php */