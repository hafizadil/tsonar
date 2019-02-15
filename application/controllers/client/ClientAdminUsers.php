<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ClientAdminUsers extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }
    
	public function client_users()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id') ==5)
		{
			$client_id = $this->session->userdata('id');
			$where = array('client_id' => $client_id );
			$data['HiringManagers'] = $this->General_model->get('ts_hiring_manager',$objArr=false, $where);			
			$data['page'] = 'clientAdminUsers';
			$data['content'] = 'admin_side/client/ClientAdminUsers';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	}

	public function add_Clientarea_HiringManager()
	{
		$client_id = $this->session->userdata('id');

		$this->_validate();

		$insertData = array(
			'hiringmanager_name' => $this->input->post('HM_Name'),
			'hiringmanager_email' => $this->input->post('HM_Email'),
			'hiringmanager_jobtitle' => $this->input->post('HM_JobTitle'),
			'client_id' => $client_id,
		);

		$insert = $this->general_model->save('ts_hiring_manager',$insertData);
		if ($insert) {
			$this->session->set_flashdata('success', 'Save Record Successfully.');
			echo json_encode(array("status" => TRUE));
		}else
		{
			$this->session->set_flashdata('error', 'error in saving record.');
			echo json_encode(array("status" => TRUE));
		}
	}

	public function get_Clientarea_HiringManager($id)
	{
		$where = array('hiringmanager_id' => $id );
		$Data = $this->General_model->get('ts_hiring_manager', $objArr=false, $where);
		echo json_encode($Data);
	}

	public function update_Clientarea_HiringManager()
	{
		$this->_validate();
		$insertData = array(
			'hiringmanager_name' => $this->input->post('HM_Name'),
			'hiringmanager_email' => $this->input->post('HM_Email'),
			'hiringmanager_jobtitle' => $this->input->post('HM_JobTitle')
		);

		$where = array('hiringmanager_id' => $this->input->post('id'));

		$insert = $this->general_model->update('ts_hiring_manager',$insertData, $where);
		if ($insert) {
			$this->session->set_flashdata('success', 'Updated Record Successfully.');
			echo json_encode(array("status" => TRUE));
		}else{
			$this->session->set_flashdata('error', 'error in saving record.');
			echo json_encode(array("status" => TRUE));
		}
	}

	public function delete_Clientarea_HiringManager()
	{
		$id = $this->input->post('clientID');

		$where = array('hiringmanager_id' => $id);

		$delete = $this->General_model->delete('ts_hiring_manager', $where);

		echo json_encode($delete);
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('HM_Name') == '')
		{
		$data['inputerror'][] = 'HM_Name';
		$data['error_string'][] = 'Name is required';
		$data['status'] = FALSE;
		}

		if(!filter_var($_POST['HM_Email'], FILTER_VALIDATE_EMAIL))
		{
		$data['inputerror'][] = 'HM_Email';
		$data['error_string'][] = 'Please Enter Valid Email';
		$data['status'] = FALSE;
		}

		if($this->input->post('HM_JobTitle') == '')
		{
		$data['inputerror'][] = 'HM_JobTitle';
		$data['error_string'][] = 'Job Title is required';
		$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
		echo json_encode($data);
		exit();
		}
	} 

}