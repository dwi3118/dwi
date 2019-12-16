<?php
defined('BASAPATH') OR exit();

/**
 * 
 */
class M_guru extends CI_Model
{
	
	public function tampil()
	{
		
		return $this->db->get('guru');
	}

	public function save($data)
	{
		$this->db->insert('guru', $data);
	}

	public function getnip($nip)
	{
		$param=array('nip'=>$nip);
		return $this->db->get_where('guru', $param);
	}

	public function update($data,$nip)
	{
		$this->db->where('nip', $nip);
		$this->db->update('guru', $data);
	}
}