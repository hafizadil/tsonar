<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ClientAdminBillings extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }
    
	public function client_billings()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id') ==5)
		{			
			$data['page'] = 'clientAdminBillings';
			$data['content'] = 'admin_side/client/ClientAdmin_Billings';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	} 
}