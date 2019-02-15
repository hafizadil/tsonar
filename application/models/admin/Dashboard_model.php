<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model 
{
	public function get_talent_request_data($id)
	{
		$this->db->select('tr.*,hm.created_at as hm_created_at,hm.availability_id as availability_id, hm.availability_monday as availability_monday,hm.availability_tuesday as availability_tuesday,hm.availability_wednesday as availability_wednesday,hm.availability_thursaday as availability_thursaday,hm.availability_friday as availability_friday,cb_area.*,hiring_manager.*,sv.*');
        $this->db->from('ts_talent_requests tr');
        $this->db->where('talent_request_id',$id['talent_request_id']); 
        $this->db->join('ts_manager_availability hm', 'hm.request_id=tr.talent_request_id', 'LEFT');
		$this->db->join('ts_client_or_business_area cb_area', 'cb_area.clientbusiness_id=tr.client_or_bussiness_id', 'LEFT');
		$this->db->join('ts_hiring_manager hiring_manager', 'hiring_manager.hiringmanager_id=tr.hiringmanager_id', 'LEFT');
		$this->db->join('ts_setting_values sv', 'sv.value_id=tr.job_field', 'LEFT');        
        //$this->db->join('ts_hiring_manager c', 'c.hiringmanager_id=a.hiringmanager_id');
        return $this->db->get()->row();
	}
}