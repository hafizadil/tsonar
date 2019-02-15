<?php

			class Setting_model extends CI_Model {

			    public function __construct()
			    {
			    	parent::__construct();

			    }

			public function display_settings_values()
				{

			$this->db->select('ts_settings.*,ts_setting_values.*')
			                 ->from('ts_setting_values')
			                 // ->join('tb_user', ' permission_role.user_id=tb_user.usertype', 'left')
			                 ->join('ts_settings', 'ts_setting_values.setting_id = ts_settings.setting_id', 'left');
			                 $query = $this->db->get();
			                return $result = $query->result();
				}
				
			public function settings_values_status($id){

			 $status = $this->db->query("select value_status from ts_setting_values where value_id= $id")->row()->value_status;
			 
			if($status==0)
			{
			    $status = 1;
			} 
			else 
			{
			    $status = 0;
			}

			$data=array('value_status'=>$status);
			$this->db->where('value_id',$id);
			$this->db->update('ts_setting_values',$data);
			}

			public function settings_outer_status($id){

			 $status = $this->db->query("select setting_status from ts_settings where setting_id= $id")->row()->setting_status;
			 
			if($status==0)
			{
			    $status = 1;
			} 
			else 
			{
			    $status = 0;
			}

			$data=array('setting_status'=>$status);
			$this->db->where('setting_id',$id);
			$this->db->update('ts_settings',$data);
			}

			public function settings_values($id)
				{

			$this->db->select('ts_settings.*,ts_setting_values.*')
			                 ->from('ts_settings')
			                 // ->join('tb_user', ' permission_role.user_id=tb_user.usertype', 'left')
			                 ->join('ts_setting_values', 'ts_settings.setting_id = ts_setting_values.setting_id', 'left')
			                 ->where('ts_settings.setting_id',$id);
			                 $query = $this->db->get();
			                return $result = $query->result();
				}
				public function settings_name($id)
				{

				$this->db->select('ts_settings.*')
			                 ->from('ts_settings')
			                 ->where('ts_settings.setting_id',$id);
			                 $query = $this->db->get();
			                return $result = $query->result();
				}

				public function get_settings_value($where)
				{
			        $query = $this->db->query("SELECT * FROM `ts_setting_values` WHERE `value_id` IN($where)");
			        return $result = $query->result();
				}
}


