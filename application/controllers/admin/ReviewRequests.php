<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ReviewRequests extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }

    public function reviewrequest_()
    {
    	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5)
		{
			$data['talentRequests'] = $this->General_model->get('ts_talent_requests');
			$data['page'] = 'ReviewRequests';
			$data['content'] = 'admin_side/ReviewRequests/reviewrequest_';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
    }
}