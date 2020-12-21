<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_model extends CI_Model {
	private $table = "mahasiswa";

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}


	public function getById($ID)
	{
		return $this->db->get_where($this->table, ["ID" => $ID])->row_object();
	}

	public function update($dataInput, $ID)
	{
		return $this->db->update($this->table, $dataInput, array('ID' => $ID));
	}

}

/* End of file m_model.php */
/* Location: ./application/models/m_model.php */

?>