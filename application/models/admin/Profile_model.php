<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model 
{

    public function __construct()
	{
        parent::__construct();
        $this->load->database();
    }
    public function get_userProfile($id)
    {
    	$this->db->where('id', $id);
    	return $this->db->get('ts_users')->row();
    }
    public function update_userProfile($data)
    {
        // echo "<pre>";print_r($data);die();
        $this->db->where('id',$data['id']);
        return $this->db->update('ts_users',$data);
    }
}