<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class TalentRequests extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }
    
	public function talent_requests()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'talentRequests';
			$data['content'] = 'admin_side/talentRequests/talentRequests_';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('login');
		}
	}
	// talentRequests form submit
	public function submit_talent_request()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			// $config['upload_path'] = './uploads/';
			// $config['allowed_types'] = 'gif|jpg|png';
			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			// $this->upload->initialize($config);
			// $this->upload->do_upload('fileField');  
			// echo "<pre>";print_r($_POST);
			// die();
			$day='';
			$all = array();
			$monday = array();
			$tuesday = array();
			$wednesday = array();
			$thursday = array();
			$friday = array();
			for ($days_counter=1; $days_counter <=6 ; $days_counter++) 
			{
				if ($days_counter==1) 
				{
				 	$day ='all';
				}
				if ($days_counter==2) 
				{
				 	$day ='monday';
				}
				if ($days_counter==3) 
				{
				 	$day ='tuesday';
				}
				if ($days_counter==4) 
				{
				 	$day ='wednesday';
				}
				if ($days_counter==5) 
				{
				 	$day ='thursday';
				}
				if ($days_counter==6) 
				{
				 	$day ='friday';
				}

				for ($day_slots=1; $day_slots <= 24 ; $day_slots++) 
				{ 
					if ($day == 'all') 
					{
						$all_value ='';
						array_push($all, $all_value);		
					}
					if ($day == 'monday') 
					{
						$mon_value ='';
						array_push($monday, $mon_value);		
					}
					if ($day == 'tuesday') 
					{
						$tue_value ='';
						array_push($tuesday, $tue_value);		
					}
					if ($day == 'wednesday') 
					{
						$wed_value ='';
						array_push($wednesday, $wed_value);		
					}
					if ($day == 'thursday') 
					{
						$thu_value ='';
						array_push($thursday, $thu_value);		
					}
					if ($day == 'friday') 
					{
						$fri_value ='';
						array_push($friday, $fri_value);		
					}
				}
			}

			$formdata = $_POST;
			foreach ($formdata as $key => $value)
			{
				$dayVariable =  explode("-",$key);
				
				if ($dayVariable[0]=='full') 
				{
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$all[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$all[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$all[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$all[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$all[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$all[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$all[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$all[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$all[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$all[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$all[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$all[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$all[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$all[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$all[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$all[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$all[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$all[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$all[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$all[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$all[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$all[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$all[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$all[23]=$value;		
						}
					}						
				
					// all days ends
					// monday start
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$monday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$monday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$monday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$monday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$monday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$monday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$monday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$monday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$monday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$monday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$monday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$monday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$monday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$monday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$monday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$monday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$monday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$monday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$monday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$monday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$monday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$monday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$monday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$monday[23]=$value;		
						}
											
					}
					// monday slots ends
					// tueday slots start
					if ($dayVariable[1]=='tue') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$tuesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$tuesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$tuesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$tuesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$tuesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$tuesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$tuesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$tuesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$tuesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$tuesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$tuesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$tuesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$tuesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$tuesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$tuesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$tuesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$tuesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$tuesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$tuesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$tuesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$tuesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$tuesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$tuesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$tuesday[23]=$value;		
						}
					}
					if ($dayVariable[1]=='wed') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$wednesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$wednesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$wednesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$wednesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$wednesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$wednesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$wednesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$wednesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$wednesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$wednesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$wednesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$wednesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$wednesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$wednesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$wednesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$wednesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$wednesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$wednesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$wednesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$wednesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$wednesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$wednesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$wednesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$wednesday[23]=$value;		
						}
					}
					// wednesday ends
					// thusday start
					if ($dayVariable[1]=='thu') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$thursday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$thursday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$thursday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$thursday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$thursday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$thursday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$thursday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$thursday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$thursday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$thursday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$thursday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$thursday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$thursday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$thursday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$thursday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$thursday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$thursday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$thursday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$thursday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$thursday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$thursday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$thursday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$thursday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$thursday[23]=$value;		
						}
					}
					// thursday ends
					// friday start
					if ($dayVariable[1]=='fri') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$friday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$friday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$friday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$friday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$friday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$friday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$friday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$friday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$friday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$friday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$friday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$friday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$friday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$friday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$friday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$friday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$friday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$friday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$friday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$friday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$friday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$friday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$friday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$friday[23]=$value;		
						}
					}
				}
			}
			// echo "<pre>";print_r($monday);print_r($tuesday);print_r($wednesday);print_r($thursday);die();
			// die();
			$image_name = $_FILES['fileField']['name'];
			$json = array();
			$Workingdays=array();
			$this->form_validation->set_rules('clientBusiness','Client or Business Area','trim|required');
			$this->form_validation->set_rules('hiringManager','Hiring Manager','trim|required');
			$this->form_validation->set_rules('jobField','Job Field','trim|required');
			$this->form_validation->set_rules('jobTitle','"Job Title"','trim|required');
			$this->form_validation->set_rules('jobLevel','Job Level','trim|required');
			// chekc for the locations of the job
			$this->form_validation->set_rules('jobLocation','job Location','trim|required');
			// values checked against job level of leader of leaders
			if ($this->input->post('jobLevel')=='Leader of leaders') 
			{
				$this->form_validation->set_rules('teamDirectReport','Team Direct Report','trim|required');
				$this->form_validation->set_rules('totalTeamFunctions','Total Team Functions','trim|required');	
			}
			// values checked against job level of leader of Professionals
			if ($this->input->post('jobLevel')=='Leader of professionals') 
			{
				$this->form_validation->set_rules('teamDirectReport','Team Direct Report','trim|required');
			}
			// check value of contrct type
			$this->form_validation->set_rules('contractType','Contract Type','trim|required');
			// values checked contract type of fixed or contract
			if (($this->input->post('contractType')=='Fixed-term') || ($this->input->post('contractType')=='Contractor'))
			{
				$this->form_validation->set_rules('contractMonth','Contract Month','trim|required');
			}
			// conract tyep pemamnet and fixed and payment of Annual
			if ( ($this->input->post('contractType')=='Permanent') || ($this->input->post('contractType')=='Fixed-term')) 
			{
				$this->form_validation->set_rules('payAmountAnnual','Pay Amount Annual','trim|required');
			}
			// payment type is monthly against contractor contract type
			if ($this->input->post('contractType')=='Contractor') 
			{
				$this->form_validation->set_rules('payAmountDaily','Pay Amount Monthly','trim|required');
			}
			// paytype flexiale of not flesxible			
			$this->form_validation->set_rules('flexiableOnpay','Flexiable On Pay','trim');
			// bonus on fixed salary
			$this->form_validation->set_rules('bonus','Bonus','trim|required');
			// workType i.e fulltime or part-time
			$this->form_validation->set_rules('workType','Work Type','trim|required');
			// check if coontarct is fill time or part time
			if ($this->input->post('workType')=='part-time') 
			{
				$this->form_validation->set_rules('workingHours','Working Hours','trim|required');
			}
			// if workings hours are available then check for working days 
			if ($this->input->post('workingHours')) 
			{
				$this->form_validation->set_rules('workingDaysall','Working Day','trim');
			}
			// check if all any days optoions is selected
			if ($this->input->post('workingDaysall')=='any-days') 
			{
				$this->form_validation->set_rules('workingDaysall','Working Day','trim|required');
				$Workingdays['anyDays']=$this->input->post('workingDaysall');
			}
			// check if monday is selected
			if ($this->input->post('workingDayMon')=='monday') 
			{
				$this->form_validation->set_rules('workingDayMon','Working Day','trim|required');
				$Workingdays['workingDayMon']=$this->input->post('workingDayMon');
			}
			// check if tuesday is selected
			if ($this->input->post('workingDayTue')=='tuesday') 
			{
				$this->form_validation->set_rules('workingDayTue','Working Day','trim|required');
				$Workingdays['workingDayTue']=$this->input->post('workingDayTue');
			}
			// check if wednesday is selected 
			if ($this->input->post('workingDayWed')=='wednesday') 
			{
				$this->form_validation->set_rules('workingDayWed','Working Day','trim|required');
				$Workingdays['workingDayWed']=$this->input->post('workingDayWed');
			}
			// check of thursday is selected
			if ($this->input->post('workingDaythu')=='thursday') 
			{
				$this->form_validation->set_rules('workingDaythu','Working Day','trim|required');
				$Workingdays['workingDaythu']=$this->input->post('workingDaythu');
			}
			// check if friday is selected
			if ($this->input->post('workingDayFri')=='friday') 
			{
				$this->form_validation->set_rules('workingDayFri','Working Day','trim|required');
				$Workingdays['workingDayFri']=$this->input->post('workingDayFri');
			}
			// objective checking
			$this->form_validation->set_rules('objective_1','Objective 1','trim|required');
			$this->form_validation->set_rules('objective_2','Objective 2','trim|required');
			$this->form_validation->set_rules('objective_3','Objective 3','trim|required');
			// check level capability
			$this->form_validation->set_rules('levelCapability','Level Capability','trim|required');
			// check experience fields 
			$this->form_validation->set_rules('experience','Experience','trim|required');
			// check successor ready fields 
			$this->form_validation->set_rules('successor_Ready','Successor Ready','trim|required');
			// check qualification for the job posted
			$this->form_validation->set_rules('qualification','Qualification','trim|required');
			// check skills required for the talent
			$this->form_validation->set_rules('skill_1','Skill 1','trim|required');
			$this->form_validation->set_rules('skill_2','Skill 2','trim|required');
			$this->form_validation->set_rules('skill_3','Skill 3','trim|required');
			// check addiotion details
			// bonus for the current job
			$this->form_validation->set_rules('bonusByOut','Bonus By Out','trim|required');
			// check relocationAssistance for the job
			$this->form_validation->set_rules('relocationAssistance','Relocation Assistance','trim|required');
			// check flexible working hours for the job 
			$this->form_validation->set_rules('flexibleWorking','Flexible Working','trim|required');
			// check for the target candidate
			$this->form_validation->set_rules('referral_1','Referral 1','required|max_length[150]');
			$this->form_validation->set_rules('referral_2','Referral 2','required|max_length[150]');
			$this->form_validation->set_rules('referral_3','Referral 3','required|max_length[150]');
			// check other search Assistance
			$this->form_validation->set_rules('AdditionalSearchTxt','Additional Search Requirements','trim|required');
			// check for the video link
			$this->form_validation->set_rules('videoLink','video Link','trim|required');

			
			$this->form_validation->set_rules('fileField', 'File Field', 'trim');
			// hiring manager availability
			// echo "<pre>";print_r($monday);
			// print_r($tuesday);
			// print_r($wednesday);
			// print_r($thursday);
			// print_r($friday);
			// if($monday !=='' && $tuesday !=='' && $wednesday !=='' && $thursday !=='' && $friday !=='')
			// {
			// 	echo 1;
			// }
			// else
			// {
			// 	echo 0;
			// }
			// die('athy');
			$flexiable_on_pay =false;
			if (isset($_POST['flexiableOnpay'])) {
				$flexiable_on_pay=$this->input->post('flexiableOnpay');
			}
			if ( ($this->form_validation->run() !== false) && ( !empty($monday) && !empty($tuesday) && !empty($wednesday) && !empty($thursday) && !empty($friday)))
			{

				$insertData = array(
					'request_type' => 2,
					'job_field' => $this->input->post('jobField'),
					'job_title' => $this->input->post('jobTitle'),
					'job_location' => $this->input->post('jobLocation'),
					'job_level' => $this->input->post('jobLevel'),
					'contract_type' => $this->input->post('contractType'),
					'flexible_pay' => $flexiable_on_pay,
					'bonus' => $this->input->post('bonus'),
					'work_type' => $this->input->post('workType'),
					'objective_1' => $this->input->post('objective_1'),
					'objective_2' => $this->input->post('objective_2'),
					'objective_3' => $this->input->post('objective_3'),
					'level_capability' => $this->input->post('levelCapability'),
					'experience' => $this->input->post('experience'),
					'successor_ready' => $this->input->post('successor_Ready'),
					'qualifications' => $this->input->post('qualification'),
					'specific_skill_1' => $this->input->post('skill_1'),
					'specific_skill_2' => $this->input->post('skill_2'),
					'specific_skill_3' => $this->input->post('skill_3'),
					'bonus_buy_out' => $this->input->post('bonusByOut'),
					'relocation_assistance' => $this->input->post('relocationAssistance'),
					'flexible_working' => $this->input->post('flexibleWorking'),
					'target_candidate_1' => $this->input->post('referral_1'),
					'target_candidate_2' => $this->input->post('referral_2'),
					'target_candidate_3' => $this->input->post('referral_3'),
					'additional_requirements' => $this->input->post('AdditionalSearchTxt'),
					'video_link' => $this->input->post('videoLink'),
					'attachments' => $image_name,
					'client_or_bussiness_id' => $this->input->post('clientBusiness'),
					'hiringmanager_id' => $this->input->post('hiringManager')
				);
				// job level check for leader of leaders
				if ($this->input->post('jobLevel')=='Leader of leaders') 
				{
					$LoL_arr = array(
						'team_direct_report'=>$this->input->post('teamDirectReport'),
						'team_total_functions'=>$this->input->post('totalTeamFunctions'),
					);
					$insertData = array_merge($insertData, $LoL_arr);
				}
				// job level for leader of professionals
				if ($this->input->post('jobLevel')=='Leader of professionals') 
				{
					$LoP_arr = array(
						'team_direct_report'=>$this->input->post('teamDirectReport'),
						
					);
					$insertData = array_merge($insertData, $LoP_arr);	
				}
				// contract type permamnet salary type
				if ($this->input->post('contractType')=='Permanent') 
				{
					$CP_arr = array(
						'pay_amount_annual'=>$this->input->post('payAmountAnnual'),
						
					);
					$insertData = array_merge($insertData, $CP_arr);
					
				}
				// contract type fixed salary
				if ($this->input->post('contractType')=='Fixed-term') 
				{
					$CFT_arr = array(
						'pay_amount_annual'=>$this->input->post('payAmountAnnual'),
						'contract_months'=>$this->input->post('contractMonth'),
					);
					$insertData = array_merge($insertData, $CFT_arr);		
				}
				// contract type contractor
				if ($this->input->post('contractType')=='Contractor') 
				{
					$CC_arr = array(
						'pay_amount_daily'=>$this->input->post('payAmountDaily'),
						'contract_months'=>$this->input->post('contractMonth'),
					);
					$insertData = array_merge($insertData, $CC_arr);			
				} 
				// work type part time
				if ($this->input->post('workType')=='part-time') 
				{
					$WTPT_arr = array(
						'work_hours'=>$this->input->post('workingHours'),
						'work_days'=>implode(",", $Workingdays),
					);
					$insertData = array_merge($insertData, $WTPT_arr);		
				}
				// echo "<pre>";print_r($insertData);die();
				$insertData = $this->General_model->save('ts_talent_requests',$insertData);

				$insertAvailability = array(
					'availability_all'=>json_encode($all),
					'availability_monday'=>json_encode($monday),
					'availability_tuesday'=>json_encode($tuesday),
					'availability_wednesday'=>json_encode($wednesday),
					'availability_thursaday'=>json_encode($thursday),
					'availability_friday'=>json_encode($friday),
					'request_id'=>$insertData
				);
				// echo "<pre>";print_r($insertAvailability);die();
				$insertAvailability = $this->General_model->save('ts_manager_availability',$insertAvailability);

				move_uploaded_file($_FILES['fileField']['tmp_name'],"uploads/".$_FILES['fileField']['name']);
				$json = array
						(
							'status' => 'ok',
							'redirect' => 'talentRequests'
						);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
			}
			else
			{
				$json = array
				(
					'jobField' => form_error('jobField', '<p class="mt-3 text-danger">', '</p>'),
					'jobTitle' => form_error('jobTitle', '<p class="mt-3 text-danger">', '</p>'),
					'jobLocation' => form_error('jobLocation', '<p class="mt-3 text-danger">', '</p>'),
					'teamDirectReport' => form_error('teamDirectReport', '<p class="mt-3 text-danger">', '</p>'),
					'totalTeamFunctions' => form_error('totalTeamFunctions', '<p class="mt-3 text-danger">', '</p>'),
					'contractType' => form_error('contractType', '<p class="mt-3 text-danger">', '</p>'),
					'contractMonth' => form_error('contractMonth', '<p class="mt-3 text-danger">', '</p>'),
					'payAmountDaily' => form_error('payAmountDaily', '<p class="mt-3 text-danger">', '</p>'),
					'payAmountAnnual' => form_error('payAmountAnnual', '<p class="mt-3 text-danger">', '</p>'),
					'flexiableOnpay' => form_error('flexiableOnpay', '<p class="mt-3 text-danger">', '</p>'),
					'bonus' => form_error('bonus', '<p class="mt-3 text-danger">', '</p>'),
					'workType' => form_error('workType', '<p class="mt-3 text-danger">', '</p>'),
					'workingHours' => form_error('workingHours', '<p class="mt-3 text-danger">', '</p>'),
					'workingDaysall' => form_error('workingDaysall', '<p class="mt-3 text-danger">', '</p>'),
					'objective_1' => form_error('objective_1', '<p class="mt-3 text-danger">', '</p>'),
					'objective_2' => form_error('objective_2', '<p class="mt-3 text-danger">', '</p>'),
					'objective_3' => form_error('objective_3', '<p class="mt-3 text-danger">', '</p>'),
					'levelCapability' => form_error('levelCapability', '<p class="mt-3 text-danger">', '</p>'),
					'experience' => form_error('experience', '<p class="mt-3 text-danger">', '</p>'),
					'successor_Ready' => form_error('successor_Ready', '<p class="mt-3 text-danger">', '</p>'),
					'qualification' => form_error('qualification', '<p class="mt-3 text-danger">', '</p>'),
					'skill_1' => form_error('skill_1', '<p class="mt-3 text-danger">', '</p>'),
					'skill_2' => form_error('skill_2', '<p class="mt-3 text-danger">', '</p>'),
					'skill_3' => form_error('skill_3', '<p class="mt-3 text-danger">', '</p>'),
					'bonusByOut' => form_error('bonusByOut', '<p class="mt-3 text-danger">', '</p>'),
					'relocationAssistance' => form_error('relocationAssistance', '<p class="mt-3 text-danger">', '</p>'),
					'flexibleWorking' => form_error('flexibleWorking', '<p class="mt-3 text-danger">', '</p>'),
					'referral_1' => form_error('referral_1', '<p class="mt-3 text-danger">', '</p>'),
					'referral_2' => form_error('referral_2', '<p class="mt-3 text-danger">', '</p>'),
					'referral_3' => form_error('referral_3', '<p class="mt-3 text-danger">', '</p>'),
					'AdditionalSearchTxt' => form_error('AdditionalSearchTxt', '<p class="mt-3 text-danger">', '</p>'),
					'videoLink' => form_error('videoLink', '<p class="mt-3 text-danger">', '</p>'),
					'fileField' => form_error('fileField', '<p class="mt-3 text-danger">', '</p>'),
					'clientBusiness' => form_error('clientBusiness', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManager' => form_error('hiringManager', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManagerAvailability' =>'hiringManagerAvailabilityError'
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
				}		
		}
	}
	// submit quick talent request
	public function submit_quick_talent_request()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			// echo "<pre>";print_r($_POST);die();
			$day='';
			$all = array();
			$monday = array();
			$tuesday = array();
			$wednesday = array();
			$thursday = array();
			$friday = array();
			for ($days_counter=1; $days_counter <=6 ; $days_counter++) 
			{
				if ($days_counter==1) 
				{
				 	$day ='all';
				}
				if ($days_counter==2) 
				{
				 	$day ='monday';
				}
				if ($days_counter==3) 
				{
				 	$day ='tuesday';
				}
				if ($days_counter==4) 
				{
				 	$day ='wednesday';
				}
				if ($days_counter==5) 
				{
				 	$day ='thursday';
				}
				if ($days_counter==6) 
				{
				 	$day ='friday';
				}

				for ($day_slots=1; $day_slots <= 24 ; $day_slots++) 
				{ 
					if ($day == 'all') 
					{
						$all_value ='';
						array_push($all, $all_value);		
					}
					if ($day == 'monday') 
					{
						$mon_value ='';
						array_push($monday, $mon_value);		
					}
					if ($day == 'tuesday') 
					{
						$tue_value ='';
						array_push($tuesday, $tue_value);		
					}
					if ($day == 'wednesday') 
					{
						$wed_value ='';
						array_push($wednesday, $wed_value);		
					}
					if ($day == 'thursday') 
					{
						$thu_value ='';
						array_push($thursday, $thu_value);		
					}
					if ($day == 'friday') 
					{
						$fri_value ='';
						array_push($friday, $fri_value);		
					}
				}
			}
			// echo "<pre>";print_r($all);
			// print_r($monday);
			// print_r($tuesday);
			// print_r($wednesday);
			// print_r($thursday);
			// print_r($friday);die();

			$formdata = $_POST;
			foreach ($formdata as $key => $value) 
			{
				$dayVariable =  explode("-",$key);
				
				if ($dayVariable[0]=='quick') 
				{
					// echo "<pre>";print_r($dayVariable);
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$all[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$all[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$all[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$all[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$all[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$all[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$all[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$all[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$all[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$all[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$all[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$all[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$all[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$all[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$all[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$all[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$all[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$all[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$all[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$all[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$all[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$all[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$all[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$all[23]=$value;		
						}
					}						
				
					// all days ends
					// monday start
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$monday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$monday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$monday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$monday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$monday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$monday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$monday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$monday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$monday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$monday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$monday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$monday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$monday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$monday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$monday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$monday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$monday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$monday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$monday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$monday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$monday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$monday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$monday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$monday[23]=$value;		
						}
											
					}
					// monday slots ends
					// tueday slots start
					if ($dayVariable[1]=='tue') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$tuesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$tuesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$tuesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$tuesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$tuesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$tuesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$tuesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$tuesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$tuesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$tuesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$tuesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$tuesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$tuesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$tuesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$tuesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$tuesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$tuesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$tuesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$tuesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$tuesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$tuesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$tuesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$tuesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$tuesday[23]=$value;		
						}
					}
					if ($dayVariable[1]=='wed') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$wednesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$wednesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$wednesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$wednesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$wednesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$wednesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$wednesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$wednesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$wednesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$wednesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$wednesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$wednesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$wednesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$wednesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$wednesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$wednesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$wednesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$wednesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$wednesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$wednesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$wednesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$wednesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$wednesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$wednesday[23]=$value;		
						}
					}
					// wednesday ends
					// thusday start
					if ($dayVariable[1]=='thu') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$thursday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$thursday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$thursday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$thursday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$thursday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$thursday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$thursday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$thursday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$thursday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$thursday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$thursday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$thursday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$thursday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$thursday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$thursday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$thursday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$thursday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$thursday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$thursday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$thursday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$thursday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$thursday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$thursday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$thursday[23]=$value;		
						}
					}
					// thursday ends
					// friday start
					if ($dayVariable[1]=='fri') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$friday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$friday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$friday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$friday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$friday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$friday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$friday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$friday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$friday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$friday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$friday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$friday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$friday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$friday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$friday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$friday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$friday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$friday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$friday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$friday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$friday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$friday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$friday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$friday[23]=$value;		
						}
					}
				}
			}
			// die();
			// echo "<pre>";print_r($friday);die();
			$json = array();
			$this->form_validation->set_rules('quickClientBusiness','Client or Business Area','trim|required');
			$this->form_validation->set_rules('quickHiringManager','Hiring Manager','trim|required');
			$this->form_validation->set_rules('quick_job_field','Job Field','trim|required');
			$this->form_validation->set_rules('quick_job_title','"Job Title"','trim|required');
			$this->form_validation->set_rules('quick_job_level','Job Level','trim|required');
			$this->form_validation->set_rules('quick_contract_type','Contract Type','trim|required');
			$this->form_validation->set_rules('quick_contract_type','Contract Type','trim|required');
			// values checked contract type of fixed or contract
			if (($this->input->post('quick_contract_type')=='Fixed-term') || ($this->input->post('quick_contract_type')=='Contractor'))
			{
				$this->form_validation->set_rules('quick_contract_months','Contract Month','trim|required');
			}
			// conract tyep pemamnet and fixed and payment of Annual
			if ( ($this->input->post('quick_contract_type')=='Permanent') || ($this->input->post('quick_contract_type')=='Fixed-term')) 
			{
				$this->form_validation->set_rules('quick_annual_pay','Pay Amount Annual','trim|required');
			}
			// payment type is monthly against contractor contract type
			if ($this->input->post('quick_contract_type')=='Contractor') 
			{
				$this->form_validation->set_rules('quick_daily_pay','Pay Amount Monthly','trim|required');
			}
			// paytype flexiale of not flesxible			
			$this->form_validation->set_rules('quick_flexible_pay','Flexiable On Pay','trim');
			// bonus on fixed salary
			$this->form_validation->set_rules('bonus_buy_out','Bonus','trim|required');

			$flexiable_on_pay =false;
			if (isset($_POST['quick_flexible_pay'])) {
				$flexiable_on_pay=$this->input->post('quick_flexible_pay');
			}


			if ( ($this->form_validation->run() !== false) && (!empty($monday) && !empty($tuesday) && !empty($wednesday) && !empty($thursday) && !empty($friday)))
			{

				$insertData = array(
					'request_type' => 1,
					'job_field' => $this->input->post('quick_job_field'),
					'job_title' => $this->input->post('quick_job_title'),
					'job_location' => $this->input->post('quick_jobLocation'),
					'job_level' => $this->input->post('quick_job_level'),
					'contract_type' => $this->input->post('quick_contract_type'),
					'flexible_pay' => $flexiable_on_pay,
					'bonus' => $this->input->post('bonus_buy_out'),
					'client_or_bussiness_id' => $this->input->post('quickClientBusiness'),
					'hiringmanager_id' => $this->input->post('quickHiringManager')
				);
				// echo "<pre>";print_r($insertData);die();
				// echo "<pre>";print_r($monday);die();
				$insertData = $this->General_model->save('ts_talent_requests',$insertData);

				$insertAvailability = array(
					'availability_all'=>json_encode($all),
					'availability_monday'=>json_encode($monday),
					'availability_tuesday'=>json_encode($tuesday),
					'availability_wednesday'=>json_encode($wednesday),
					'availability_thursaday'=>json_encode($thursday),
					'availability_friday'=>json_encode($friday),
					'request_id'=>$insertData
				);
				// echo "<pre>";print_r($insertAvailability);die();
				$insertAvailability = $this->General_model->save('ts_manager_availability',$insertAvailability);

				$json = array
						(
							'status' => 'ok',
							'redirect' => 'talentRequests'
						);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
			}
			else
			{
				$json = array
				(
					'quick_job_field' => form_error('quick_job_field', '<p class="mt-3 text-danger">', '</p>'),
					'quick_job_title' => form_error('quick_job_title', '<p class="mt-3 text-danger">', '</p>'),
					'quick_jobLocation' => form_error('quick_jobLocation', '<p class="mt-3 text-danger">', '</p>'),
					'quick_job_level' => form_error('quick_job_level', '<p class="mt-3 text-danger">', '</p>'),
					'quickClientBusiness' => form_error('quickClientBusiness', '<p class="mt-3 text-danger">', '</p>'),
					'quickHiringManager' => form_error('quickHiringManager', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManagerAvailabilityError' =>'hiringManagerAvailabilityError'
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
				}		
		}
	}
	public function submit_quick_talent_request_modal()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			echo "<pre>";print_r($_POST);die();
			$day='';
			$all = array();
			$monday = array();
			$tuesday = array();
			$wednesday = array();
			$thursday = array();
			$friday = array();
			for ($days_counter=1; $days_counter <=6 ; $days_counter++) 
			{
				if ($days_counter==1) 
				{
				 	$day ='all';
				}
				if ($days_counter==2) 
				{
				 	$day ='monday';
				}
				if ($days_counter==3) 
				{
				 	$day ='tuesday';
				}
				if ($days_counter==4) 
				{
				 	$day ='wednesday';
				}
				if ($days_counter==5) 
				{
				 	$day ='thursday';
				}
				if ($days_counter==6) 
				{
				 	$day ='friday';
				}

				for ($day_slots=1; $day_slots <= 24 ; $day_slots++) 
				{ 
					if ($day == 'all') 
					{
						$all_value ='';
						array_push($all, $all_value);		
					}
					if ($day == 'monday') 
					{
						$mon_value ='';
						array_push($monday, $mon_value);		
					}
					if ($day == 'tuesday') 
					{
						$tue_value ='';
						array_push($tuesday, $tue_value);		
					}
					if ($day == 'wednesday') 
					{
						$wed_value ='';
						array_push($wednesday, $wed_value);		
					}
					if ($day == 'thursday') 
					{
						$thu_value ='';
						array_push($thursday, $thu_value);		
					}
					if ($day == 'friday') 
					{
						$fri_value ='';
						array_push($friday, $fri_value);		
					}
				}
			}
			// echo "<pre>";print_r($all);
			// print_r($monday);
			// print_r($tuesday);
			// print_r($wednesday);
			// print_r($thursday);
			// print_r($friday);die();

			$formdata = $_POST;
			foreach ($formdata as $key => $value) 
			{
				$dayVariable =  explode("-",$key);
				
				if ($dayVariable[0]=='quick') 
				{
					// echo "<pre>";print_r($dayVariable);
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$all[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$all[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$all[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$all[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$all[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$all[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$all[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$all[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$all[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$all[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$all[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$all[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$all[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$all[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$all[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$all[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$all[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$all[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$all[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$all[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$all[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$all[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$all[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$all[23]=$value;		
						}
					}						
				
					// all days ends
					// monday start
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$monday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$monday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$monday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$monday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$monday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$monday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$monday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$monday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$monday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$monday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$monday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$monday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$monday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$monday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$monday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$monday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$monday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$monday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$monday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$monday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$monday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$monday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$monday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$monday[23]=$value;		
						}
											
					}
					// monday slots ends
					// tueday slots start
					if ($dayVariable[1]=='tue') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$tuesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$tuesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$tuesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$tuesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$tuesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$tuesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$tuesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$tuesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$tuesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$tuesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$tuesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$tuesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$tuesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$tuesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$tuesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$tuesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$tuesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$tuesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$tuesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$tuesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$tuesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$tuesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$tuesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$tuesday[23]=$value;		
						}
					}
					if ($dayVariable[1]=='wed') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$wednesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$wednesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$wednesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$wednesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$wednesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$wednesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$wednesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$wednesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$wednesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$wednesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$wednesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$wednesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$wednesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$wednesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$wednesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$wednesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$wednesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$wednesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$wednesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$wednesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$wednesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$wednesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$wednesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$wednesday[23]=$value;		
						}
					}
					// wednesday ends
					// thusday start
					if ($dayVariable[1]=='thu') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$thursday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$thursday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$thursday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$thursday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$thursday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$thursday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$thursday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$thursday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$thursday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$thursday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$thursday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$thursday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$thursday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$thursday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$thursday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$thursday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$thursday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$thursday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$thursday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$thursday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$thursday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$thursday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$thursday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$thursday[23]=$value;		
						}
					}
					// thursday ends
					// friday start
					if ($dayVariable[1]=='fri') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$friday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$friday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$friday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$friday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$friday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$friday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$friday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$friday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$friday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$friday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$friday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$friday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$friday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$friday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$friday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$friday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$friday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$friday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$friday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$friday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$friday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$friday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$friday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$friday[23]=$value;		
						}
					}
				}
			}
			// echo "<pre>";print_r($friday);die();
			$json = array();
			$this->form_validation->set_rules('quickClientBusiness_modal','Client or Business Area','trim|required');
			$this->form_validation->set_rules('quickHiringManager_modal','Hiring Manager','trim|required');
			$this->form_validation->set_rules('quick_job_field_modal','Job Field','trim|required');
			$this->form_validation->set_rules('quick_job_title_modal','"Job Title"','trim|required');
			$this->form_validation->set_rules('quick_job_level','Job Level','trim|required');
			
			if ( ($this->form_validation->run() !== false) && (!empty($monday) && !empty($tuesday) && !empty($wednesday) && !empty($thursday) && !empty($friday)))
			{

				$insertData = array(
					'request_type' => 1,
					'job_field' => $this->input->post('quick_job_field_modal'),
					'job_title' => $this->input->post('quick_job_title_modal'),
					'job_location' => $this->input->post('quick_jobLocation_modal'),
					'job_level' => $this->input->post('quick_job_level'),
					'client_or_bussiness_id' => $this->input->post('quickClientBusiness_modal'),
					'hiringmanager_id' => $this->input->post('quickHiringManager_modal')
				);
				// echo "<pre>";print_r($insertData);die();
				$insertData = $this->General_model->save('ts_talent_requests',$insertData);

				$insertAvailability = array(
					'availability_all'=>json_encode($all),
					'availability_monday'=>json_encode($monday),
					'availability_tuesday'=>json_encode($tuesday),
					'availability_wednesday'=>json_encode($wednesday),
					'availability_thursaday'=>json_encode($thursday),
					'availability_friday'=>json_encode($friday),
					'request_id'=>$insertData
				);
				// echo "<pre>";print_r($insertAvailability);die();
				$insertAvailability = $this->General_model->save('ts_manager_availability',$insertAvailability);

				$json = array
						(
							'status' => 'ok',
							'redirect' => 'talentRequests'
						);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
			}
			else
			{
				$json = array
				(
					'quick_job_field' => form_error('quick_job_field', '<p class="mt-3 text-danger">', '</p>'),
					'quick_job_title' => form_error('quick_job_title', '<p class="mt-3 text-danger">', '</p>'),
					'quick_jobLocation' => form_error('quick_jobLocation', '<p class="mt-3 text-danger">', '</p>'),
					'quick_job_level' => form_error('quick_job_level', '<p class="mt-3 text-danger">', '</p>'),
					'quickClientBusiness' => form_error('quickClientBusiness', '<p class="mt-3 text-danger">', '</p>'),
					'quickHiringManager' => form_error('quickHiringManager', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManagerAvailabilityError' =>'hiringManagerAvailabilityError'
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
				}		
		}
	}  
	// client or bussines area form submit 
	public function submit_client_bussiness_area()
	{

		$this->_validate();
		$insertData = array(
			'firstname' => $this->input->post('talent_cl_input_fname'),
			'lastname' => $this->input->post('talent_cl_input_lname'),
			'phone' => $this->input->post('talent_cl_input_phone'),
			'email' => $this->input->post('talent_cl_input_email'),
			'gender' => ($this->input->post('talent_cl_input_gender')),
			'state' => $this->input->post('talent_cl_input_state'),
			'zipcode' => $this->input->post('talent_cl_input_zipcode'),
			'city' => $this->input->post('talent_cl_input_city'),
			'country' => $this->input->post('talent_cl_input_country'),
			'password' => md5($this->input->post('talent_cl_input_password')),
			//'avatar' =>	$image,
			'role_id' => '5',
			'status'	=>'1'
		);
		$insert = $this->general_model->save('ts_users',$insertData);
		if ($insert) {
			$this->session->set_flashdata('success', 'Save Record Successfully.');
			echo json_encode(array("status" => TRUE));
			}else{
			$this->session->set_flashdata('error', 'error in saving record.');
			echo json_encode(array("status" => TRUE));
		}
	} 

	// hiring manager form submit over here 
	public function submit_hiring_manager()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			// echo "<pre>";print_r($_POST);die();
			$json = array();
			$this->form_validation->set_rules('hiringManagerName','Hiring Manager Name','trim|required');
			$this->form_validation->set_rules('hiringManagerJobTitle','Hiring Manager Job Title','trim|required');
			$this->form_validation->set_rules('hiringManagerEmail', 'Hiring Manager Email', 'max_length[150]|valid_email|required');
				
			if ($this->form_validation->run() !== false)
			{
				$insertData = array(
					'hiringmanager_name' => $this->input->post('hiringManagerName'),
					'hiringmanager_email' => $this->input->post('hiringManagerEmail'),
					'hiringmanager_jobtitle' => $this->input->post('hiringManagerJobTitle')
				);
				$insertData = $this->General_model->save('ts_hiring_manager',$insertData);
				$json = array
						(
							'status' => 'ok',
							'redirect' => 'talentRequests'
						);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
			}
			else
			{
				$json = array
				(
					'hiringManagerName' => form_error('hiringManagerName', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManagerEmail' => form_error('hiringManagerEmail', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManagerJobTitle' => form_error('hiringManagerJobTitle', '<p class="mt-3 text-danger">', '</p>'),
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
				}		
		}
	}

	// full job request job modal start
	 public function submit_talent_request_modal()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			// echo "<pre>";print_r($_POST);die();
			// $config['upload_path'] = './uploads/';
			// $config['allowed_types'] = 'gif|jpg|png';
			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			// $this->upload->initialize($config);
			// $this->upload->do_upload('fileField');  
			// echo "<pre>";print_r($_POST);
			// die();
			$day='';
			$all = array();
			$monday = array();
			$tuesday = array();
			$wednesday = array();
			$thursday = array();
			$friday = array();
			for ($days_counter=1; $days_counter <=6 ; $days_counter++) 
			{
				if ($days_counter==1) 
				{
				 	$day ='all';
				}
				if ($days_counter==2) 
				{
				 	$day ='monday';
				}
				if ($days_counter==3) 
				{
				 	$day ='tuesday';
				}
				if ($days_counter==4) 
				{
				 	$day ='wednesday';
				}
				if ($days_counter==5) 
				{
				 	$day ='thursday';
				}
				if ($days_counter==6) 
				{
				 	$day ='friday';
				}

				for ($day_slots=1; $day_slots <= 24 ; $day_slots++) 
				{ 
					if ($day == 'all') 
					{
						$all_value ='';
						array_push($all, $all_value);		
					}
					if ($day == 'monday') 
					{
						$mon_value ='';
						array_push($monday, $mon_value);		
					}
					if ($day == 'tuesday') 
					{
						$tue_value ='';
						array_push($tuesday, $tue_value);		
					}
					if ($day == 'wednesday') 
					{
						$wed_value ='';
						array_push($wednesday, $wed_value);		
					}
					if ($day == 'thursday') 
					{
						$thu_value ='';
						array_push($thursday, $thu_value);		
					}
					if ($day == 'friday') 
					{
						$fri_value ='';
						array_push($friday, $fri_value);		
					}
				}
			}
			// echo "<pre>";print_r($all);
			// print_r($monday);
			// print_r($tuesday);
			// print_r($wednesday);
			// print_r($thursday);
			// print_r($friday);die();

			$formdata = $_POST;
			foreach ($formdata as $key => $value) 
			{
				$dayVariable =  explode("-",$key);
				
				if ($dayVariable[0]=='quick') 
				{
					// echo "<pre>";print_r($dayVariable);
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$all[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$all[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$all[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$all[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$all[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$all[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$all[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$all[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$all[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$all[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$all[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$all[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$all[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$all[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$all[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$all[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$all[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$all[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$all[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$all[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$all[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$all[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$all[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$all[23]=$value;		
						}
					}						
				
					// all days ends
					// monday start
					if ($dayVariable[1]=='mon') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$monday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$monday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$monday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$monday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$monday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$monday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$monday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$monday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$monday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$monday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$monday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$monday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$monday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$monday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$monday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$monday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$monday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$monday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$monday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$monday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$monday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$monday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$monday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$monday[23]=$value;		
						}
											
					}
					// monday slots ends
					// tueday slots start
					if ($dayVariable[1]=='tue') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$tuesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$tuesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$tuesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$tuesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$tuesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$tuesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$tuesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$tuesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$tuesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$tuesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$tuesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$tuesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$tuesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$tuesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$tuesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$tuesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$tuesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$tuesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$tuesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$tuesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$tuesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$tuesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$tuesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$tuesday[23]=$value;		
						}
					}
					if ($dayVariable[1]=='wed') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$wednesday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$wednesday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$wednesday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$wednesday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$wednesday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$wednesday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$wednesday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$wednesday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$wednesday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$wednesday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$wednesday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$wednesday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$wednesday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$wednesday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$wednesday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$wednesday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$wednesday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$wednesday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$wednesday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$wednesday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$wednesday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$wednesday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$wednesday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$wednesday[23]=$value;		
						}
					}
					// wednesday ends
					// thusday start
					if ($dayVariable[1]=='thu') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$thursday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$thursday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$thursday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$thursday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$thursday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$thursday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$thursday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$thursday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$thursday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$thursday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$thursday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$thursday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$thursday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$thursday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$thursday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$thursday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$thursday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$thursday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$thursday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$thursday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$thursday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$thursday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$thursday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$thursday[23]=$value;		
						}
					}
					// thursday ends
					// friday start
					if ($dayVariable[1]=='fri') 
					{
						if ($dayVariable[2]=='8:00') 
						{
							$friday[0]=$value;		
						}
						if ($dayVariable[2]=='8:30') 
						{
							$friday[1]=$value;		
						}
						if ($dayVariable[2]=='9:00') 
						{
							$friday[2]=$value;		
						}
						if ($dayVariable[2]=='9:30') 
						{
							$friday[3]=$value;		
						}
						if ($dayVariable[2]=='10:00') 
						{
							$friday[4]=$value;		
						}
						if ($dayVariable[2]=='10:30') 
						{
							$friday[5]=$value;		
						}
						if ($dayVariable[2]=='11:00') 
						{
							$friday[6]=$value;		
						}
						if ($dayVariable[2]=='11:30') 
						{
							$friday[7]=$value;		
						}
						if ($dayVariable[2]=='12:00') 
						{
							$friday[8]=$value;		
						}
						if ($dayVariable[2]=='12:30') 
						{
							$friday[9]=$value;		
						}
						if ($dayVariable[2]=='13:00') 
						{
							$friday[10]=$value;		
						}
						if ($dayVariable[2]=='13:30') 
						{
							$friday[11]=$value;		
						}
						if ($dayVariable[2]=='14:00') 
						{
							$friday[12]=$value;		
						}
						if ($dayVariable[2]=='14:30') 
						{
							$friday[13]=$value;		
						}
						if ($dayVariable[2]=='15:00') 
						{
							$friday[14]=$value;		
						}
						if ($dayVariable[2]=='15:30') 
						{
							$friday[15]=$value;		
						}
						if ($dayVariable[2]=='16:00') 
						{
							$friday[16]=$value;		
						}
						if ($dayVariable[2]=='16:30') 
						{
							$friday[17]=$value;		
						}
						if ($dayVariable[2]=='17:00') 
						{
							$friday[18]=$value;		
						}
						if ($dayVariable[2]=='17:30') 
						{
							$friday[19]=$value;		
						}
						if ($dayVariable[2]=='18:00') 
						{
							$friday[20]=$value;		
						}
						if ($dayVariable[2]=='18:30') 
						{
							$friday[21]=$value;		
						}
						if ($dayVariable[2]=='19:00') 
						{
							$friday[22]=$value;		
						}
						if ($dayVariable[2]=='19:30') 
						{
							$friday[23]=$value;		
						}
					}
				}
			}
			// echo "<pre>";print_r($monday);print_r($tuesday);print_r($wednesday);print_r($thursday);die();

			$image_name = $_FILES['fileField_modal']['name'];
			$json = array();
			$Workingdays=array();
			$this->form_validation->set_rules('clientBusiness_modal','Client or Business Area','trim|required');
			$this->form_validation->set_rules('hiringManager_modal','Hiring Manager','trim|required');
			$this->form_validation->set_rules('jobField_modal','Job Field','trim|required');
			$this->form_validation->set_rules('jobTitle_modal','"Job Title"','trim|required');
			$this->form_validation->set_rules('jobLevel','Job Level','trim|required');
			// chekc for the locations of the job
			$this->form_validation->set_rules('jobLocation','job Location','trim|required');
			// values checked against job level of leader of leaders
			if ($this->input->post('jobLevel_modal')=='Leader of leaders') 
			{
				$this->form_validation->set_rules('teamDirectReport_modal','Team Direct Report','trim|required');
				$this->form_validation->set_rules('totalTeamFunctions_modal','Total Team Functions','trim|required');	
			}
			// values checked against job level of leader of Professionals
			if ($this->input->post('jobLevel_modal')=='Leader of professionals') 
			{
				$this->form_validation->set_rules('teamDirectReport_modal','Team Direct Report','trim|required');
			}
			// check value of contrct type
			$this->form_validation->set_rules('contractType','Contract Type','trim|required');
			// values checked contract type of fixed or contract
			if (($this->input->post('contractType')=='Fixed-term') || ($this->input->post('contractType')=='Contractor'))
			{
				$this->form_validation->set_rules('contractMonth','Contract Month','trim|required');
			}
			// conract tyep pemamnet and fixed and payment of Annual
			if ( ($this->input->post('contractType')=='Permanent') || ($this->input->post('contractType')=='Fixed-term')) 
			{
				$this->form_validation->set_rules('payAmountAnnual','Pay Amount Annual','trim|required');
			}
			// payment type is monthly against contractor contract type
			if ($this->input->post('contractType')=='Contractor') 
			{
				$this->form_validation->set_rules('payAmountDaily','Pay Amount Monthly','trim|required');
			}
			// paytype flexiale of not flesxible			
			$this->form_validation->set_rules('flexiableOnpay','Flexiable On Pay','trim');
			// bonus on fixed salary
			$this->form_validation->set_rules('bonus','Bonus','trim|required');
			// workType i.e fulltime or part-time
			$this->form_validation->set_rules('workType','Work Type','trim|required');
			// check if coontarct is fill time or part time
			if ($this->input->post('workType')=='part-time') 
			{
				$this->form_validation->set_rules('workingHours','Working Hours','trim|required');
			}
			// if workings hours are available then check for working days 
			if ($this->input->post('workingHours')) 
			{
				$this->form_validation->set_rules('workingDaysall','Working Day','trim');
			}
			// check if all any days optoions is selected
			if ($this->input->post('workingDaysall')=='any-days') 
			{
				$this->form_validation->set_rules('workingDaysall','Working Day','trim|required');
				$Workingdays['anyDays']=$this->input->post('workingDaysall');
			}
			// check if monday is selected
			if ($this->input->post('workingDayMon')=='monday') 
			{
				$this->form_validation->set_rules('workingDayMon','Working Day','trim|required');
				$Workingdays['workingDayMon']=$this->input->post('workingDayMon');
			}
			// check if tuesday is selected
			if ($this->input->post('workingDayTue')=='tuesday') 
			{
				$this->form_validation->set_rules('workingDayTue','Working Day','trim|required');
				$Workingdays['workingDayTue']=$this->input->post('workingDayTue');
			}
			// check if wednesday is selected 
			if ($this->input->post('workingDayWed')=='wednesday') 
			{
				$this->form_validation->set_rules('workingDayWed','Working Day','trim|required');
				$Workingdays['workingDayWed']=$this->input->post('workingDayWed');
			}
			// check of thursday is selected
			if ($this->input->post('workingDaythu')=='thursday') 
			{
				$this->form_validation->set_rules('workingDaythu','Working Day','trim|required');
				$Workingdays['workingDaythu']=$this->input->post('workingDaythu');
			}
			// check if friday is selected
			if ($this->input->post('workingDayFri')=='friday') 
			{
				$this->form_validation->set_rules('workingDayFri','Working Day','trim|required');
				$Workingdays['workingDayFri']=$this->input->post('workingDayFri');
			}
			// objective checking
			$this->form_validation->set_rules('objective_1_modal','Objective 1','trim|required');
			$this->form_validation->set_rules('objective_2_modal','Objective 2','trim|required');
			$this->form_validation->set_rules('objective_3_modal','Objective 3','trim|required');
			// check level capability
			$this->form_validation->set_rules('levelCapability','Level Capability','trim|required');
			// check experience fields 
			$this->form_validation->set_rules('experience','Experience','trim|required');
			// check successor ready fields 
			$this->form_validation->set_rules('successor_Ready','Successor Ready','trim|required');
			// check qualification for the job posted
			$this->form_validation->set_rules('qualification','Qualification','trim|required');
			// check skills required for the talent
			$this->form_validation->set_rules('skill_1_modal','Skill 1','trim|required');
			$this->form_validation->set_rules('skill_2_modal','Skill 2','trim|required');
			$this->form_validation->set_rules('skill_3_modal','Skill 3','trim|required');
			// check addiotion details
			// bonus for the current job
			$this->form_validation->set_rules('bonusByOut','Bonus By Out','trim|required');
			// check relocationAssistance for the job
			$this->form_validation->set_rules('relocationAssistance','Relocation Assistance','trim|required');
			// check flexible working hours for the job 
			$this->form_validation->set_rules('flexibleWorking','Flexible Working','trim|required');
			// check for the target candidate
			$this->form_validation->set_rules('referral_1_modal','Referral 1','required|max_length[150]');
			$this->form_validation->set_rules('referral_2_modal','Referral 2','required|max_length[150]');
			$this->form_validation->set_rules('referral_3_modal','Referral 3','required|max_length[150]');
			// check other search Assistance
			$this->form_validation->set_rules('AdditionalSearchTxt_modal','Additional Search Requirements','trim|required');
			// check for the video link
			$this->form_validation->set_rules('videoLink_modal','video Link','trim|required');

			
			$this->form_validation->set_rules('fileField_modal', 'File Field', 'trim');
			// hiring manager availability
			// echo "<pre>";print_r($monday);
			// print_r($tuesday);
			// print_r($wednesday);
			// print_r($thursday);
			// print_r($friday);
			// die();
			// if($monday !=='' && $tuesday !=='' && $wednesday !=='' && $thursday !=='' && $friday !=='')
			// {
			// 	echo 1;
			// }
			// else
			// {
			// 	echo 0;
			// }
			// die('athy');
			$flexiable_on_pay =false;
			if (isset($_POST['flexiableOnpay'])) {
				$flexiable_on_pay=$this->input->post('flexiableOnpay');
			}
			if ( ($this->form_validation->run() !== false) )
			{

				$insertData = array(
					'request_type' => 2,
					'job_field' => $this->input->post('jobField_modal'),
					'job_title' => $this->input->post('jobTitle_modal'),
					'job_location' => $this->input->post('jobLocation'),
					'job_level' => $this->input->post('jobLevel'),
					'contract_type' => $this->input->post('contractType'),
					'flexible_pay' => $flexiable_on_pay,
					'bonus' => $this->input->post('bonus'),
					'work_type' => $this->input->post('workType'),
					'objective_1' => $this->input->post('objective_1_modal'),
					'objective_2' => $this->input->post('objective_2_modal'),
					'objective_3' => $this->input->post('objective_3_modal'),
					'level_capability' => $this->input->post('levelCapability'),
					'experience' => $this->input->post('experience'),
					'successor_ready' => $this->input->post('successor_Ready'),
					'qualifications' => $this->input->post('qualification'),
					'specific_skill_1' => $this->input->post('skill_1_modal'),
					'specific_skill_2' => $this->input->post('skill_2_modal'),
					'specific_skill_3' => $this->input->post('skill_3_modal'),
					'bonus_buy_out' => $this->input->post('bonusByOut'),
					'relocation_assistance' => $this->input->post('relocationAssistance'),
					'flexible_working' => $this->input->post('flexibleWorking'),
					'target_candidate_1' => $this->input->post('referral_1_modal'),
					'target_candidate_2' => $this->input->post('referral_2_modal'),
					'target_candidate_3' => $this->input->post('referral_3_modal'),
					'additional_requirements' => $this->input->post('AdditionalSearchTxt_modal'),
					'video_link' => $this->input->post('videoLink_modal'),
					'attachments' => $image_name,
					'client_or_bussiness_id' => $this->input->post('clientBusiness_modal'),
					'hiringmanager_id' => $this->input->post('hiringManager_modal')
				);
				// job level check for leader of leaders
				if ($this->input->post('jobLevel_modal')=='Leader_of_leaders') 
				{
					$LoL_arr = array(
						'team_direct_report'=>$this->input->post('teamDirectReport_modal'),
						'team_total_functions'=>$this->input->post('totalTeamFunctions_modal'),
					);
					$insertData = array_merge($insertData, $LoL_arr);
				}
				// job level for leader of professionals
				if ($this->input->post('jobLevel_modal')=='Leader of professionals') 
				{
					$LoP_arr = array(
						'team_direct_report'=>$this->input->post('teamDirectReport_modal'),
						
					);
					$insertData = array_merge($insertData, $LoP_arr);	
				}
				// contract type permamnet salary type
				if ($this->input->post('contractType')=='Permanent') 
				{
					$CP_arr = array(
						'pay_amount_annual'=>$this->input->post('payAmountAnnual'),
						
					);
					$insertData = array_merge($insertData, $CP_arr);
					
				}
				// contract type fixed salary
				if ($this->input->post('contractType')=='Fixed-term') 
				{
					$CFT_arr = array(
						'pay_amount_annual'=>$this->input->post('payAmountAnnual'),
						'contract_months'=>$this->input->post('contractMonth'),
					);
					$insertData = array_merge($insertData, $CFT_arr);		
				}
				// contract type contractor
				if ($this->input->post('contractType')=='Contractor') 
				{
					$CC_arr = array(
						'pay_amount_daily'=>$this->input->post('payAmountDaily'),
						'contract_months'=>$this->input->post('contractMonth'),
					);
					$insertData = array_merge($insertData, $CC_arr);			
				} 
				// work type part time
				if ($this->input->post('workType')=='part-time') 
				{
					$WTPT_arr = array(
						'work_hours'=>$this->input->post('workingHours'),
						'work_days'=>implode(",", $Workingdays),
					);
					$insertData = array_merge($insertData, $WTPT_arr);		
				}
				// echo "<pre>";print_r($insertData);die();
				$insertData = $this->General_model->save('ts_talent_requests',$insertData);

				$insertAvailability = array(
					'availability_all'=>json_encode($all),
					'availability_monday'=>json_encode($monday),
					'availability_tuesday'=>json_encode($tuesday),
					'availability_wednesday'=>json_encode($wednesday),
					'availability_thursaday'=>json_encode($thursday),
					'availability_friday'=>json_encode($friday),
					'request_id'=>$insertData
				);
				// echo "<pre>";print_r($insertAvailability);die();
				$insertAvailability = $this->General_model->save('ts_manager_availability',$insertAvailability);

				move_uploaded_file($_FILES['fileField_modal']['tmp_name'],"uploads/".$_FILES['fileField_modal']['name']);
				$json = array
						(
							'status' => 'ok',
							'redirect' => 'talentRequests'
						);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
			}
			else
			{
				$json = array
				(
					'jobField_modal' => form_error('jobField_modal', '<p class="mt-3 text-danger">', '</p>'),
					'jobField_modal' => form_error('jobField_modal', '<p class="mt-3 text-danger">', '</p>'),
					'jobLocation' => form_error('jobLocation', '<p class="mt-3 text-danger">', '</p>'),
					'teamDirectReport_modal' => form_error('teamDirectReport_modal', '<p class="mt-3 text-danger">', '</p>'),
					'totalTeamFunctions_modal' => form_error('totalTeamFunctions_modal', '<p class="mt-3 text-danger">', '</p>'),
					'contractType' => form_error('contractType', '<p class="mt-3 text-danger">', '</p>'),
					'contractMonth' => form_error('contractMonth', '<p class="mt-3 text-danger">', '</p>'),
					'payAmountDaily' => form_error('payAmountDaily', '<p class="mt-3 text-danger">', '</p>'),
					'payAmountAnnual' => form_error('payAmountAnnual', '<p class="mt-3 text-danger">', '</p>'),
					'flexiableOnpay' => form_error('flexiableOnpay', '<p class="mt-3 text-danger">', '</p>'),
					'bonus' => form_error('bonus', '<p class="mt-3 text-danger">', '</p>'),
					'workType' => form_error('workType', '<p class="mt-3 text-danger">', '</p>'),
					'workingHours' => form_error('workingHours', '<p class="mt-3 text-danger">', '</p>'),
					'workingDaysall' => form_error('workingDaysall', '<p class="mt-3 text-danger">', '</p>'),
					'objective_1_modal' => form_error('objective_1_modal', '<p class="mt-3 text-danger">', '</p>'),
					'objective_2_modal' => form_error('objective_2_modal', '<p class="mt-3 text-danger">', '</p>'),
					'objective_3_modal' => form_error('objective_3_modal', '<p class="mt-3 text-danger">', '</p>'),
					'levelCapability' => form_error('levelCapability', '<p class="mt-3 text-danger">', '</p>'),
					'experience' => form_error('experience', '<p class="mt-3 text-danger">', '</p>'),
					'successor_Ready' => form_error('successor_Ready', '<p class="mt-3 text-danger">', '</p>'),
					'qualification' => form_error('qualification', '<p class="mt-3 text-danger">', '</p>'),
					'skill_1_modal' => form_error('skill_1_modal', '<p class="mt-3 text-danger">', '</p>'),
					'skill_2_modal' => form_error('skill_2_modal', '<p class="mt-3 text-danger">', '</p>'),
					'skill_3_modal' => form_error('skill_3_modal', '<p class="mt-3 text-danger">', '</p>'),
					'bonusByOut' => form_error('bonusByOut', '<p class="mt-3 text-danger">', '</p>'),
					'relocationAssistance' => form_error('relocationAssistance', '<p class="mt-3 text-danger">', '</p>'),
					'flexibleWorking' => form_error('flexibleWorking', '<p class="mt-3 text-danger">', '</p>'),
					'referral_1_modal' => form_error('referral_1_modal', '<p class="mt-3 text-danger">', '</p>'),
					'referral_2_modal' => form_error('referral_2_modal', '<p class="mt-3 text-danger">', '</p>'),
					'referral_3_modal' => form_error('referral_3_modal', '<p class="mt-3 text-danger">', '</p>'),
					'AdditionalSearchTxt' => form_error('AdditionalSearchTxt_modal', '<p class="mt-3 text-danger">', '</p>'),
					'videoLink_modal' => form_error('videoLink_modal', '<p class="mt-3 text-danger">', '</p>'),
					'fileField_modal' => form_error('fileField_modal', '<p class="mt-3 text-danger">', '</p>'),
					'clientBusiness_modal' => form_error('clientBusiness_modal', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManager_modal' => form_error('hiringManager_modal', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManagerAvailability' =>'hiringManagerAvailabilityError'
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
				}		
		}
	}
	// full request job modal end
	//Add new talent 31/12/2018
	public function addTalent()
	{
		// echo "<pre>";print_r($_POST);die();
		$json = array();
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('location','Location','trim|required');
		$this->form_validation->set_rules('mobileNo','Mobile No.','trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|max_length[150]|valid_email|is_unique[ts_users.email]');
		$this->form_validation->set_rules('curr_company','Current Company','trim|required');
		$this->form_validation->set_rules('prev_company','Previous Company','trim|required');
		$this->form_validation->set_rules('curr_job_sdate','Current job start date','trim|required');
		$this->form_validation->set_rules('prev_job_sdate','Previous job start date','trim|required');
		$this->form_validation->set_rules('curr_job_title','Current job title','trim|required');
		$this->form_validation->set_rules('prev_job_title','Previous job title','trim|required');
		$this->form_validation->set_rules('education','Education','trim|required');
		$this->form_validation->set_rules('skills','Skills','trim|required');
		$this->form_validation->set_rules('job_field','Job Field','trim|required');


		if ($this->form_validation->run() !== false)
		{
			// $curr_job_sdate = $this->input->post('curr_job_sdate');
			// $date = strtotime($this->input->post('curr_job_sdate'));
			// $testDate = date('Y-m-d', strtotime($this->input->post('curr_job_sdate')));
			$insertData = array(
				'name' => $this->input->post('name'),
				'location' => $this->input->post('joblocation'),
				'mobile_no' => $this->input->post('mobileNo'),
				'email' => $this->input->post('email'),
				'current_company' => ($this->input->post('curr_company')),
				'prev_company' => $this->input->post('prev_company'),
				'current_job_sdate' => date('Y-m-d', strtotime($this->input->post('curr_job_sdate'))),
				'prev_job_sdate' => date('Y-m-d', strtotime($this->input->post('prev_job_sdate'))),
				'current_job_title' => $this->input->post('curr_job_title'),
				'prev_job_title' => $this->input->post('prev_job_title'),
				'qualification' => $this->input->post('education'),
				'skills' => $this->input->post('skills'),
				'job_field' => $this->input->post('jobField'),
			);
			$insert = $this->general_model->save('ts_talent',$insertData);
			if ($insert != false) {
				$this->session->set_flashdata('success', 'New Talent added successfully!');
				$json = array
				(
					'status' => 'ok',
					'redirect' => 'dashboard',
				);
			}
			
			$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
			die;
		}
		else
		{
			$json = array
			(
				'name' => form_error('name', '<p class="mt-1 text-danger">', '</p>'),
				'location' => form_error('location', '<p class="mt-1 text-danger">', '</p>'),
				'mobileNo' => form_error('mobileNo', '<p class="mt-3 text-danger">', '</p>'),
				'email' => form_error('email', '<p class="mt-3 text-danger">', '</p>'),
				'curr_company' => form_error('curr_company', '<p class="mt-3 text-danger">', '</p>'),
				'prev_company' => form_error('prev_company', '<p class="mt-3 text-danger">', '</p>'),
				'curr_job_sdate' => form_error('prev_job_sdate', '<p class="mt-3 text-danger">', '</p>'),
				'prev_job_sdate' => form_error('prev_job_sdate', '<p class="mt-3 text-danger">', '</p>'),
				'curr_job_title' => form_error('curr_job_title', '<p class="mt-3 text-danger">', '</p>'),
				'prev_job_title' => form_error('prev_job_title', '<p class="mt-3 text-danger">', '</p>'),
				'education' => form_error('education', '<p class="mt-3 text-danger">', '</p>'),
				'skills' => form_error('skills', '<p class="mt-3 text-danger">', '</p>'),
				'job_field' => form_error('job_field', '<p class="mt-3 text-danger">', '</p>')
			);
			$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
			exit;				
		}		

	}
	
	public function clientBusinessRequest()
	{
		$where = array('role_id'=> 5);
		
		$fields = array('id', 'firstname', 'lastname');
		
		$clientOrBussinessArea = $this->General_model->get('ts_users', $objArr=false, $where, $fields);

		echo json_encode($clientOrBussinessArea);
	}

	//Adil
	public function hiringMangerRequest()
	{
		
			$hiringManager = $this->General_model->get('ts_hiring_manager');

			echo json_encode($hiringManager);
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('talent_cl_input_fname') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_fname';
		$data['error_string'][] = 'First name is required';
		$data['status'] = FALSE;
		}

		if($this->input->post('talent_cl_input_lname') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_lname';
		$data['error_string'][] = 'Last name is required';
		$data['status'] = FALSE;
		}
		if(!filter_var($_POST['talent_cl_input_email'], FILTER_VALIDATE_EMAIL))
		{
		$data['inputerror'][] = 'talent_cl_input_email';
		$data['error_string'][] = 'invalid email';
		$data['status'] = FALSE;
		}

		$where = array('email' => $_POST['talent_cl_input_email'] );
		$email = $this->General_model->get('ts_users', $objArr=false, $where);
		if (!empty($email)) {
		$data['inputerror'][] = 'talent_cl_input_email';
		$data['error_string'][] = 'Email already exist';
		$data['status'] = FALSE;
		}

		if($this->input->post('talent_cl_input_phone') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_phone';
		$data['error_string'][] = 'Phone is required';
		$data['status'] = FALSE;
		}
		if($this->input->post('talent_cl_input_gender') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_gender';
		$data['error_string'][] = 'Please select gender';
		$data['status'] = FALSE;
		}

		if($this->input->post('talent_cl_input_state') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_state';
		$data['error_string'][] = 'State is required';
		$data['status'] = FALSE;
		}

		if($this->input->post('talent_cl_input_zipcode') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_zipcode';
		$data['error_string'][] = 'Zipcode is required';
		$data['status'] = FALSE;
		}
		if($this->input->post('talent_cl_input_city') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_city';
		$data['error_string'][] = 'City is required';
		$data['status'] = FALSE;
		}
		if($this->input->post('talent_cl_input_country') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_country';
		$data['error_string'][] = 'Country is required';
		$data['status'] = FALSE;
		}
		if($this->input->post('talent_cl_input_password') == '' || $this->input->post('talent_cl_input_password') < 6 )
		{
		$data['inputerror'][] = 'talent_cl_input_password';
		$data['error_string'][] = 'Password Must contain 6 character';
		$data['status'] = FALSE;
		}
		if($this->input->post('talent_cl_input_conf_pass') == '')
		{
		$data['inputerror'][] = 'talent_cl_input_conf_pass';
		$data['error_string'][] = 'Confirm Password is required';
		$data['status'] = FALSE;
		}
		if ($this->input->post('talent_cl_input_password') != $this->input->post('talent_cl_input_conf_pass')) {
		$data['inputerror'][] = 'talent_cl_input_conf_pass';
		$data['error_string'][] = 'Passwords are not match';
		$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
		echo json_encode($data);
		exit();
		}
	}

}