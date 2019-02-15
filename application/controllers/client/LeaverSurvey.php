<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class LeaverSurvey extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }
    
	public function leaversurvey_()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id') ==5)
		{
			$data['page'] = 'LeaverSurvey';
			$data['content'] = 'admin_side/client/leaversurvey';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	} 
}