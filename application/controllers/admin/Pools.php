<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Pools extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
        $this->load->model('admin/Pool_model','Pool_model');
    }
    
	public function pools_()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['TotalPools'] = $this->General_model->get('ts_pool');
			//$data['TotalPools']	= $this->Pool_model->GetPoolData();
			$data['page'] = 'pools';
			$data['content'] = 'admin_side/pools/pools_';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('login');
		}
	}


	public function add_poool()
	 {
	 	$data = array(
	 		'pool_name' => $this->input->post('PoolName')
	 	);

	 	$saveData = $this->General_model->save('ts_pool', $data);

	 	echo json_encode($saveData);
	}

	public function getpooldata()
	{
		$pool_id = $this->input->post('pool_id');
		$where = array('pool_id' => $pool_id); 
		$data = $this->General_model->get('ts_talent',$objArr=FALSE, $where);
		echo json_encode($data);
	}


	public function GetHeaderPools()
	{
		$data = $this->General_model->get('ts_pool');

		echo json_encode($data);
	}

}