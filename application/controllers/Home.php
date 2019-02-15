<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }
	
	//homepage
	public function index()
	{
		//print_r($this->session->userdata);exit;
		$data['page'] = 'home';
		$data['content'] = 'frontend/content/homepage_view';		
		$this->load->view('frontend/master_layout',$data);
	}
	
	//user registration
	public function signUp()
	{
		if (!isset($this->session->userdata['id']))
		{	
			if($this->input->server('REQUEST_METHOD') == 'POST')
			{
				$json = array();
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('last_name','Last Name','trim|required');
				$this->form_validation->set_rules('country','Country','trim|required|callback_select_validate');
				$this->form_validation->set_rules('email', 'Email', 'required|max_length[150]|valid_email|is_unique[ts_users.email]');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
				$this->form_validation->set_rules('cpassword', 'Confirm password', 'required|matches[password]|min_length[6]|max_length[32]');
				
				if ($this->form_validation->run() !== false)
				{
					$insertData = array(
						'firstname' => $this->input->post('first_name'),
						'lastname' => $this->input->post('last_name'),
						'country' => $this->input->post('country'),
						'email' => $this->input->post('email'),
						'password' => md5($this->input->post('password')),
						'role_id' => $this->input->post('role_id_reg'),
						'activation_token' => substr(sha1(mt_rand()),17,30).time(),
					);
					$insert = $this->general_model->save('ts_users',$insertData);
	                if(sendEmails('Activate Your Account',$this->input->post('email'),'activateAccount',$insertData))
					{
						$this->session->set_flashdata('success', 'Please check your email to activate your account.');
						$json = array
						(
							'status' => 'ok',
							'redirect' => 'signup'
						);
					}
					else
					{
						$this->session->set_flashdata('errors', 'There is an error while saving information.');
						$json = array
						(
							'status' => 'false',
							'redirect' => 'signup'
						);
					}
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
				}
				else
				{
					$json = array
					(
						'first_name' => form_error('first_name', '<p class="mt-3 text-danger">', '</p>'),
						'last_name' => form_error('last_name', '<p class="mt-3 text-danger">', '</p>'),
						'country' => form_error('country', '<p class="mt-3 text-danger">', '</p>'),
						'email' => form_error('email', '<p class="mt-3 text-danger">', '</p>'),
						'password' => form_error('password', '<p class="mt-3 text-danger">', '</p>'),
						'cpassword' => form_error('cpassword', '<p class="mt-3 text-danger">', '</p>')
					);
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					exit;				
				}		
			}
			else
			{
				$data['page'] = 'signup';
				$data['countries'] = $this->general_model->get('ts_countries', $objArr=TRUE);
				$data['content'] = 'frontend/user/signup';
				$this->load->view('frontend/master_layout',$data);			
			}
		}
		else
		{
			redirect('home');
		}
	}
	
	//country select validation
	function select_validate($country)
	{
		// 'none' is the first option that is default "-------Choose Country-------"
		if($country=="none")
		{
			$this->form_validation->set_message('select_validate', 'Please Select Your Country.');
			return false;
		} 
		else
		{
			// User picked something.
			return true;
		}
	}
	
	//login to user
	public function signIn()
	{
		// echo "<pre>";print_r($this->session);die();
		if (!isset($this->session->userdata['id']))
		{
			$json =  array();
			if($this->input->server('REQUEST_METHOD') == 'POST')
			{
				$json = array();
				$this->form_validation->set_rules('email', 'Email', 'required|max_length[150]|valid_email');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
				if ($this->form_validation->run() !== false)
				{
					$email = $this->input->post('email');
					$password = md5($this->input->post('password'));
					$role_id = $this->input->post('role_id_reg');
					$where = array('email' => $email, 'password' => $password, 'role_id' => $role_id, 'status' => 1);
					$result = $this->general_model->get('ts_users',$objArr=TRUE,$where);
					$remember = $this->input->post('remember_me');
					if($result)
					{
						$cookie_time = 60*60*24*7;
						$cookie_time_onset = $cookie_time+ time();
						if (isset($remember)) 
						{
							setcookie('email', $email, $cookie_time_onset);
							setcookie('password', $this->input->post('password'), $cookie_time_onset);
						}
						else
						{
							$cookie_time_fromoffset = time() -$cookie_time;
							setcookie('email', '', $cookie_time_fromoffset);
							setcookie('password', '', $cookie_time_fromoffset);
						}
						$sess_array = array();
						foreach($result as $row)
						{
							$sess_array = array
							(
								'id' 			=> $row->id,
								'firstname'		=> $row->firstname,
								'lastname'		=> $row->lastname,
								'email'			=> $row->email,
								'role_id'		=> $row->role_id,
							);
							$this->session->set_userdata($sess_array);
						}
						$this->session->set_flashdata('success', 'Successfully Login.');
						$json = array
						(
							'status' => 'ok',
							'redirect' => 'home'
						);
					}
					else
					{
						//$this->session->set_flashdata('errors', 'Username/Password Invalid');
						$json = array
						(
							'status' => 'false',
							'redirect' => 'login',
							'message' => 'Please select correct user type or enter correct login information!'
						);
					}
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
				}
				else
				{
					$json = array
					(
						'email' => form_error('email', '<p class="mt-3 text-danger">', '</p>'),
						'password' => form_error('password', '<p class="mt-3 text-danger">', '</p>'),
					);
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					exit;				
				}
			}
			else
			{
				$data['page'] = 'login';
				$data['content'] = 'frontend/user/login';
				$this->load->view('frontend/master_layout',$data);
			}
		}
		else
		{
			redirect('home');
		}
	}
	
	
	//forgot password for sending link
	public function forgotpassword()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST') 
		{
			$this->form_validation->set_rules('email', 'Email', 'required|max_length[150]|valid_email');
			if ($this->form_validation->run() !== false)
			{
				$email = $this->input->post('email');
				$where = array('email' => $email);
				$result = $this->general_model->get('ts_users', $objArr=FALSE,$where);
				if($result)
				{
					$data = array
					(
						'reset_password' => substr(sha1(mt_rand()),17,30).time(),
					);
					$where = array('email' => $email);
					$result = $this->general_model->update('ts_users',$where,$data);
					$result = $this->general_model->get('ts_users', $objArr=FALSE,$where);
					$insertData = array
					(
						'firstname' => $result[0]['firstname'],
						'token' => $result[0]['reset_password'],
						'email' => $result[0]['email'],
					);
					sendEmails('Reset Password',$email,'resetPassword',$insertData);
					
					$this->session->set_flashdata('success', 'Reset Password Link Sent Successfully. Please check your mail');
					$json = array
					(
						'status' => 'ok',
						'redirect' => 'resetpassword',
						'message' => 'Reset password link sent to your email!'
					);
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
				}
				else
				{
					//$this->session->set_flashdata('errors', 'Invalid Email/User not Exist in our Database');
					$json = array
					(
						'status' => 'false',
						'message' => 'Invalid email or not exist in our database',
						'redirect' => 'resetpassword'
					);
				}
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				die;
			}
			else
			{
				$json = array
				(
					'email' => form_error('email', '<p class="mt-3 text-danger">', '</p>'),
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
			}
		}
		else
		{
			$data['page'] = 'forgot-password';
			$data['content'] = 'frontend/user/forgot-password';
			$this->load->view('frontend/master_layout',$data);
		} 
	}
	     
	//role_id while login linkedin
	public function session()
	{ 
		$role_id_reg = $this->input->post('role_id_reg');
		$this->session->set_userdata(array('role_id_reg'=>$role_id_reg));
	}
	 
	//login linkedin
	public function login_linkedin() 
	{
		$role_id = $this->session->userdata('role_id_reg');
		$site_url = $this->config->item('base_url').'home/';		
		$client_id = $this->config->item('client_id');//"81hjvv8jnhdq78";
		$client_secret = $this->config->item('client_secret');//"qzc3T2MLmreyLGWA";
		
		$social_instance = new Social();
		$ldnData = $social_instance->linkedin_connect(NULL,$site_url,$client_id,$client_secret);
		if(!empty($ldnData['redirectURL'])) 
		{
			 redirect($ldnData['redirectURL']);
		} 
		else 
		{
			if(!empty($ldnData['oauth_uid'])) 
			{
				$where = array('email' => $ldnData['email']);
				$result = $this->general_model->get('ts_users', $objArr=FALSE, $where);
				if($result)
				{
					$where = array('email' => $ldnData['email'], 'role_id' => $role_id);
					$result = $this->general_model->get('ts_users', $objArr=FALSE,$where);
					unset($_SESSION['role_id_reg']);
					if($result)
					{
						$where = array('email' => $ldnData['email']);
						$this->general_model->update('ts_users',$where,$ldnData);
						$ldnData['id'] = 1;
						$this->session->set_userdata($ldnData);
						redirect('dashboard');
					}
					else
					{
						
						$this->session->set_flashdata('errors', 'Please select correct user type or enter correct login information!');
						redirect('login');
					}
				}
				else
				{
					if($role_id)
					{
						$ldnData['role_id'] = $role_id;
						$this->general_model->save('ts_users',$ldnData);
						unset($_SESSION['role_id_reg']);
						$role_id = 0;
						$ldnData['id'] = 1;//is_logged_in
						$this->session->set_userdata($ldnData);
						redirect('dashboard');
					}
					else
					{
						$this->session->set_flashdata('errors', 'Please select correct user type or enter correct login information!');
						redirect('login');
					}
				}					
		  	}
		}
	}
	
	//after login user will go to the page
	public function ldn_login()
	{
		$connect = $this->uri->segment(3);
		if($this->session->userdata('logged_user')== true)
		{
      		if($connect) 
			{
				redirect('home');
				//$this->load->view('welcome_message');
			} 
			else 
			{
				redirect(base_url('dashboard'));
			}       
		}
		if($connect == 'ldn') 
		{
			$this->login_linkedin();
			redirect('home');
		}
	}
	
	
	
	
	function setPassword($email, $accessToken)
	{
		$where = array('email' => $email, 'reset_password' => $accessToken);
		$result = $this->general_model->get('ts_users', $objArr=FALSE,$where);
		if($result)
		{
			$this->session->set_userdata(array('email'=>$email));
			redirect("resetp");
		}
	}
	
	public function resetp()
	{
		$email = $this->input->post('email');
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{	
			$json = array();
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
				$this->form_validation->set_rules('cpassword', 'Confirm password', 'required|matches[password]|min_length[6]|max_length[32]');
			if ($this->form_validation->run() !== false)
			{
				$data = array(
					'password' => md5($this->input->post('password')),
					'reset_password' => substr(sha1(mt_rand()),17,30).time(),
				);
				$where = array('email' => $email);
				$result = $this->general_model->update('ts_users',$where,$data);
				
				if($result == TRUE)
				{
					$this->session->set_flashdata('success', 'Password reset successfully. Login now!');
					$json = array(
						'status' => 'ok',
						'redirect' => 'login'
					);
				}
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				die;
			}
			else
			{
				$json = array
				(
					'password' => form_error('password', '<p class="mt-3 text-danger">', '</p>'),
					'cpassword' => form_error('cpassword', '<p class="mt-3 text-danger">', '</p>')
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
			}
		}
		else
		{
			$data['page'] = 'reset-password';
			$data['content'] = 'frontend/user/reset-password';
			$this->load->view('frontend/master_layout',$data);
		}
	}
	
	function mailConfirmation($email, $accessToken)
	{
		$where = array('email' => $email, 'activation_token' => $accessToken);
		$result = $this->general_model->get('ts_users', $objArr=FALSE,$where);
		if($result > 0)
		{
			$updateData = array
			(
				'activation_time' => date('Y-m-d H:i:s'),
				'activation_token' => substr(sha1(mt_rand()),17,30).time(),
				'status' => 1,
			);
			$where = array('email' => $email);
			$result = $this->general_model->update('ts_users',$where,$updateData);
			if($result == TRUE)
			{
				$this->session->set_flashdata('success', 'Your accounr has been Activated successfully. Please Login!.');
				redirect('login');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Access Token Expired!!.');
			redirect('signup');
		}
	}


	public function ContactUs()
    {
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$json = array();
			$this->form_validation->set_rules('nm','Name','trim|required');
			$this->form_validation->set_rules('em','Email','trim|required');
			$this->form_validation->set_rules('phone','Phone','trim|required');
			$this->form_validation->set_rules('FB', 'Comment', 'trim|required');
			if ($this->form_validation->run() !== false)
			{
				$insertData = array
				(
					'name' => $this->input->post('nm'),
					'email' => $this->input->post('em'),
					'phone' => $this->input->post('phone'),
					'comment' => $this->input->post('FB')
				);
				$insert = $this->general_model->save('contact',$insertData);
				if($insert)
				{
					$json = array
					(
						'status' => 'ok',
						'redirect' => 'contact',
						'message' => 'Thank you for contacting with us!'
					);
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
				}
				else
				{
					//$this->session->set_flashdata('errors', 'There is an error while saving information.');
					$json = array(
						'status' => 'false',
						'redirect' => 'contact',
						'message' => 'There is an error while saving information.'								
					);
				}
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				die;
			}
            else
			{
				$json = array
				(
						'nm' => form_error('nm', '<p class="mt-3 text-danger">', '</p>'),
						'em' => form_error('em', '<p class="mt-3 text-danger">', '</p>'),
						'phone' => form_error('phone', '<p class="mt-3 text-danger">', '</p>'),
						'FB' => form_error('FB', '<p class="mt-3 text-danger">', '</p>')
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
            }
        }
		else
		{
			$data['page'] = 'contact';
			$data['content'] = 'frontend/content/contact';
			$this->load->view('frontend/master_layout',$data);
		}
    }
	
	public function logout()
	{
        //Unset token and user data from session
        
        //Destroy entire session
        $this->session->sess_destroy();
        // Redirect to login page
        redirect('admin');
    }
    public function hireNow()
    {
    	if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$monday = array();
			$tuesday = array();
			$wednesday = array();
			$thursday = array();
			$friday = array();

			$formdata = $_POST;
			foreach ($formdata as $key => $value)
			{
				$dayVariable =  explode("-",$key);
				if ($dayVariable[0]=='front') 
				{
					if ($dayVariable[1]=='mon') {
					array_push($monday,$value);
					}
					if ($dayVariable[1]=='tue') {
						array_push($tuesday,$value);
					}
					if ($dayVariable[1]=='wed') {
						array_push($wednesday,$value);
					}
					if ($dayVariable[1]=='thu') {
						array_push($thursday,$value);
					}
					if ($dayVariable[1]=='fri') {
						array_push($friday,$value);
					}	
				}
			}
			// echo "<pre>";print_r($monday);print_r($tuesday);print_r($wednesday);print_r($thursday);die();

			$json = array();

			$this->form_validation->set_rules('front_job_field','Job Field','trim|required');
			$this->form_validation->set_rules('front_job_title','"Job Title"','trim|required');
			$this->form_validation->set_rules('front_job_level','Job Level','trim|required');
			$this->form_validation->set_rules('front_user_email','User Email','trim|required|valid_email');
			// chekc for the locations of the job
			$this->form_validation->set_rules('front_job_location','job Location','trim|required');

			// check value of contrct type
			$this->form_validation->set_rules('front_contract_type','Contract Type','trim|required');
			// values checked contract type of fixed or contract
			if (($this->input->post('front_contract_type')=='Fixed-term') || ($this->input->post('front_contract_type')=='Contractor'))
			{
				$this->form_validation->set_rules('front_contract_months','Contract Month','trim|required');
			}
			// conract tyep pemamnet and fixed and payment of Annual
			if ( ($this->input->post('front_contract_type')=='Permanent') || ($this->input->post('front_contract_type')=='Fixed-term')) 
			{
				$this->form_validation->set_rules('front_annual_pay','Pay Amount Annual','trim|required');
			}
			// payment type is monthly against contractor contract type
			if ($this->input->post('front_contract_type')=='Contractor') 
			{
				$this->form_validation->set_rules('front_daily_pay','Pay Amount Monthly','trim|required');
			}
			// paytype flexiale of not flesxible			
			$this->form_validation->set_rules('front_flexible_on_pay','Flexiable On Pay','trim');
			// bonus on fixed salary
			$this->form_validation->set_rules('front_bonus','Bonus','trim|required');
			// workType i.e fulltime or part-time
			
			$flexiable_on_pay =false;
			if (isset($_POST['front_flexible_on_pay'])) {
				$flexiable_on_pay=$this->input->post('front_flexible_on_pay');
			}
			if ( ($this->form_validation->run() !== false) && ( !empty($monday) && !empty($tuesday) && !empty($wednesday) && !empty($thursday) && !empty($friday)))
			{

				$insertData = array(
					'request_type' => 3,
					'job_field' => $this->input->post('front_job_field'),
					'user_email' => $this->input->post('front_user_email'),
					'job_title' => $this->input->post('front_job_title'),
					'job_location' => $this->input->post('front_job_location'),
					'job_level' => $this->input->post('front_job_level'),
					'contract_type' => $this->input->post('front_contract_type'),
					'flexible_pay' => $flexiable_on_pay,
					'bonus' => $this->input->post('front_bonus')
				);

				// contract type permamnet salary type
				if ($this->input->post('front_contract_type')=='Permanent') 
				{
					$CP_arr = array(
						'pay_amount_annual'=>$this->input->post('front_annual_pay'),
						
					);
					$insertData = array_merge($insertData, $CP_arr);
					
				}
				// contract type fixed salary
				if ($this->input->post('front_contract_type')=='Fixed-term') 
				{
					$CFT_arr = array(
						'pay_amount_annual'=>$this->input->post('front_annual_pay'),
						'contract_months'=>$this->input->post('front_contract_months'),
					);
					$insertData = array_merge($insertData, $CFT_arr);		
				}
				// contract type contractor
				if ($this->input->post('front_contract_type')=='Contractor') 
				{
					$CC_arr = array(
						'pay_amount_daily'=>$this->input->post('front_daily_pay'),
						'contract_months'=>$this->input->post('front_contract_months'),
					);
					$insertData = array_merge($insertData, $CC_arr);			
				} 
				
				// echo "<pre>";print_r($insertData);die();

				$insertjob = $this->General_model->save('ts_talent_requests',$insertData);

				$insertAvailability = array(
					'availability_monday'=>json_encode($monday),
					'availability_tuesday'=>json_encode($tuesday),
					'availability_wednesday'=>json_encode($wednesday),
					'availability_thursaday'=>json_encode($thursday),
					'availability_friday'=>json_encode($friday),
					'request_id'=>$insertjob
				);
				
				$insertAvail = $this->General_model->save('ts_manager_availability',$insertAvailability);
				// echo "<pre>";print_r($insertAvail);die();
				// $res =sendEmails('Job Request Has been Received!','nouman.arshad69@gmail.com','job_request_mail',$insertData);
				// echo "<pre>";print_r($res);die();
				// sendEmails('Job Request Has been Submitted!',$this->input->post('front_user_email'),'job_request_mail',$insertData)
				if ($insertjob)
				{
					$json = array
						(
							'status' => 'ok',
							'redirect' => 'hire_now'
						);
				}
				else
				{
					$this->session->set_flashdata('errors', 'There is an error while saving information.');
					$json = array
					(
						'status' => 'false',
						'redirect' => 'hire_now'
					);
					
				}

					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
			}
			else
			{
				$json = array
				(
					'jobField' => form_error('front_job_field', '<p class="mt-3 text-danger">', '</p>'),
					'jobTitle' => form_error('front_job_title', '<p class="mt-3 text-danger">', '</p>'),
					'userEmail' => form_error('front_user_email', '<p class="mt-3 text-danger">', '</p>'),
					'jobLocation' => form_error('front_job_location', '<p class="mt-3 text-danger">', '</p>'),
					'contractType' => form_error('front_contract_type', '<p class="mt-3 text-danger">', '</p>'),
					'contractMonth' => form_error('front_contract_months', '<p class="mt-3 text-danger">', '</p>'),
					'payAmountDaily' => form_error('front_daily_pay', '<p class="mt-3 text-danger">', '</p>'),
					'payAmountAnnual' => form_error('front_annual_pay', '<p class="mt-3 text-danger">', '</p>'),
					'flexiableOnpay' => form_error('front_flexible_on_pay', '<p class="mt-3 text-danger">', '</p>'),
					'bonus' => form_error('front_bonus', '<p class="mt-3 text-danger">', '</p>'),
					'hiringManagerAvailability' =>'hiringManagerAvailabilityError'
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
				exit;				
				}		
		}
		else
		{
    		$data['page'] = 'hire_now';
			$data['content'] = 'frontend/user/hire_now_view';		
			$this->load->view('frontend/master_layout',$data);
   		}
   	}
	
		
}
