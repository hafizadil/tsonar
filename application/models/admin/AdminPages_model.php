<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminPages_model extends CI_Model 
{

        public function get_client_hiringmanager($where)
        {
                $this->db->select('a.hiringmanager_id,a.hiringmanager_name, a.hiringmanager_email, a.hiringmanager_jobtitle');
                $this->db->from('ts_hiring_manager as a');
                $this->db->join('ts_users as b', 'b.id=a.client_id');
                $this->db->where($where);
                return $this->db->get()->result_array();
        }


}