<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pool_model extends CI_Model 
{
	public function GetPoolData()
	{
		$this->db->select('*');
        $this->db->from('ts_pool a'); 
        $this->db->join('ts_talent b', 'b.pool_id=a.id', 'LEFT');
        //$this->db->join('ts_hiring_manager c', 'c.hiringmanager_id=a.hiringmanager_id');
        return $this->db->get()->result();
	}
}